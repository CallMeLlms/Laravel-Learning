<?php

use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layout.main');
});

Route::get('/form', function () {
    return view('component.form');
});


