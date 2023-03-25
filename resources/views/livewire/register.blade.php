<form wire:submit.prevent="submit">

    <!-- document -->
    <div>
        <x-input-label for="document" :value="__('Document')" />
        <x-text-input id="document" class="block mt-1 w-full" type="text" wire:model="document" :value="old('document')" required autofocus autocomplete="document" />
        <x-input-error :messages="$errors->get('document')" class="mt-2" />
    </div>
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Lastname -->
    <div>
        <x-input-label for="lastname" :value="__('Lastname')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="lastname" :value="old('name')" required autofocus autocomplete="Lastname" />
        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

     <!-- cellphone -->
    <div class="mt-4">
        <x-input-label for="cellphone" :value="__('Cellphone')" />
        <x-text-input id="cellphone" class="block mt-1 w-full" type="text" wire:model="cellphone" :value="old('cellphone')" required autofocus autocomplete="cellphone" />
        <x-input-error :messages="$errors->get('cellphone')" class="mt-2" />
    </div>

    <!-- Address -->
    <div class="mt-4">
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" wire:model="address" :value="old('address')" required autofocus autocomplete="address" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>

    <!-- Country -->
    <div class="mt-4">
        <x-input-label for="country" :value="__('Country')" />
        <x-select wire:model="country">
            @foreach ($countries as $value )
                <option value="{{ $value->id }}">{{ __($value->name) }}</option>
            @endforeach
        </x-select>
        <x-input-error :messages="$errors->get('country')" class="mt-2" />
    </div>

     <!-- Role -->
     <div class="mt-4">
        <x-input-label for="country" :value="__('Role')" />
        <x-select wire:model="role">
            @foreach ($roles as $value )
                <option value="{{ $value->id }}">{{ __($value->name) }}</option>
            @endforeach
        </x-select>
        <x-input-error :messages="$errors->get('role')" class="mt-2" />
    </div>



    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        wire:model="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        wire:model="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ml-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
