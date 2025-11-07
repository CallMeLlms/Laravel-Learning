<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    // Return public 
    public function signInView() {
        return view('partials.signIn_account');
    }

    // Handle signIn Request
    public function signIn(Request $request) {

        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // i relly don't know 
         if (Auth::guard('custom')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'name' => 'The provided credentials are incorrect.',
        ]);
        
    }

    // Return public 
    public function signUpView() {
        return view('partials.signUp_account');
    }

    // Handle signUp Request
    public function signUp(Request $request) {

        
        $request->validate([
            'name' => 'required|string|max:255',
            /*
                unique must match the table name its referencing
                nigga
            */

            'email' => 'required|string|unique:lara_learning,email',
            'password' => 'required|min:6|confirmed',
        ]);


        /*
            User_model is the name its going to reference
            it can be the protected referencing table also
            nigga
        */
        $User_model = User_model::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        Auth::login($User_model);
        return redirect()->route('signIn');
        // idk how to return view? 
        // return view('partials.signIn_account');
    }

}
