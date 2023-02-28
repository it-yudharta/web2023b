<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo';
});

Route::get('/blog', function () {
    return view('blog');
});
