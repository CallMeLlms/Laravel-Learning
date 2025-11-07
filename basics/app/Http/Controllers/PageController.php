<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('partials.signIn_account');
    }


    public function home() {
        return view('partials.home_content');   
    }
}
