<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/login' , [AuthController::class, 'authenticate']);
Route::get('/logout' , [AuthController::class, 'logout']);

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

Route::prefix('/blogs')->middleware('auth')->group(function() {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/create', [BlogController::class, 'create']);
    Route::post('/create', [BlogController::class, 'store']);
    Route::get('/{blogId}/edit', [BlogController::class, 'edit']);
    Route::post('/{blogId}/edit', [BlogController::class, 'update']);
    Route::get('/{blogId}/delete', [BlogController::class, 'destroy']);
});
