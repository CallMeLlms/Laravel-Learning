<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signInView() {
        return view('partials.signIn_account');
    }

    public function signUpView() {
        return view('partials.signUp_account');
    }
}
