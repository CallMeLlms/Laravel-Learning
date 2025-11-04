<?php

use Illuminate\Support\Facades\Route;

/*
    --This routes returns 2 views in one but the goal is to use extends
    -- this shit confusing
    -- im i retarded?
*/

Route::get('/layout', function () {
    return view('layout.main');
});

Route::get('/layout', function () {
    return view('partials.signIn_account');
});


