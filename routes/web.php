<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    $name = 'Cahya Bagus Sanjaya';
    $umur = 30;

    return 'Halo Nama Saya: ' . $name . ', umur: ' . $umur;
});

Route::get('/hello/{name}/{age?}', function ($name, $age = 20) {
    return 'Hello ' . $name . ', dengan umur: ' . $age;
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogs', function() {
    $blogs = Blog::all();

    return view('blog.index', [ 'blogs' => $blogs ]);
});
