<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoutesController extends Controller
{
    public function dashboard(){

        return view('dashboard');
    }

    public function client(){

        return view('client');
    }

    public function supplier(){

        return view('supplier');
    }

    public function intern(){

        return view('intern');
    }
}
