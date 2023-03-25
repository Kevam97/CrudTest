<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Register extends Component
{
    public $document, $name, $lastname, $address, $cellphone, $email, $country, $password, $password_confirmation, $role;

    public $countries =[], $roles = [];

    public function mount(){
        $this->roles = Role::all();
        $this->countries = Country::all();
    }

    public $rules =[
        'document' => 'required|numeric|unique:users,document',
        'name' => 'required|string|min:5|max:100',
        'lastname'=> 'required|string|max:100',
        'address'=> 'required|max:180',
        'cellphone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'email'=> 'required|email|unique:users,email',
        'password'=>'required|confirmed',
        'country'=> 'required',
        'role'=> 'required'
    ];

    public function submit(){
        $this->validate();
        $user = User::create([
            'document' => $this->document,
            'name' => $this->name,
            'lastname'=> $this->lastname,
            'address'=> $this->address,
            'cellphone'=> $this->cellphone,
            'email'=> $this->email,
            'password'=>  Hash::make($this->password),
            'country_id'=> $this->country
        ]);

        $user->assignRole(Role::find($this->role));

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);

    }

    public function render()
    {
        return view('livewire.register');
    }
}
