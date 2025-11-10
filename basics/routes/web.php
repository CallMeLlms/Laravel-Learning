<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController; 

/*
    --This routes returns 2 views in one but the goal is to use extends
    -- this shit confusing
    -- im i retarded?
*/

// layout shit
Route::get('/layout', [PageController::class, 'main'])->name('main');

// --Home Route
Route::get('/home', [PageController::class, 'home'])->name('home');

// Admin Route
Route::get('/admin', [PageController::class, 'admin'])->name('admin');


// Auth shit
Route::get('/signIn', [AuthController::class, 'signInView'])->name('signIn');
Route::post('/signIn', [AuthController::class, 'signIn'])->name('signIn.post');

Route::get('/signUp', [AuthController::class, 'signUpView'])->name('signUp');
Route::post('/signUp', [AuthController::class, 'signUp'])->name('signUp.post');


Route::get('/', function () {
    return view('index');
});

// Route::get('/layout', function () {
//     return view('layout.main');
// });

// Route::get('/layout', function () {
//     return view('partials.signIn_account');
// });




