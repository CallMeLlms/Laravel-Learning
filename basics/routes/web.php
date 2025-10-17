<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnControler;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', function () {
    return view('layout.signIn');
});

Route::post('/layout', [App\Http\Controllers\LearnControler::class, 'store']); 