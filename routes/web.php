<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// New route for dynamic examples
Route::get('/examples/{type?}', function ($type = 'all') {
    return view('welcome', ['exampleType' => $type]);
});