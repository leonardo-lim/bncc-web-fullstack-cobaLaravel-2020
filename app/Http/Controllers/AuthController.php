<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerView()
    {
        return view('register');
    }

    public function welcomeView()
    {
        return view('welcome');
    }

    public function getName(Request $reg)
    {
        $firstName = $reg->input('firstName');
        $lastName = $reg->input('lastName');
        
        return view('/welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
