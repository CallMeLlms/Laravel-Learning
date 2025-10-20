<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function store(Request $request) {
        
        return redirect()->route('success');
    }
    
}
