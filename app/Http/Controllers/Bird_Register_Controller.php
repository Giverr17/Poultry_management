<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bird_Register_Controller extends Controller
{
    public function register()
    {
        return view('contents.register');
    }
}
