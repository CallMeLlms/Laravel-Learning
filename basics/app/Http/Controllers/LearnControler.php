<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnControler extends Controller
{
    public function store(Request $request) {
        
    
        return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);
    }
    
}
