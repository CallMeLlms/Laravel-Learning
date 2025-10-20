<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', function () {
    return view('layout.signIn');
});

Route::post('/layout', [LearnController::class, 'store']); 


Route::get('/component', function () {
    return 'Success page!';
    // return view('component.success');
})->name('success');