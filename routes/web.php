<?php

use App\Models\Blog;
use Illuminate\Http\Request;
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

Route::get('/blogs/create', function() {
    return view('blog.create');
});

Route::post('/blogs/create', function(Request $request) {
    $blog = new Blog;
    $blog->title = $request->title;
    $blog->author = $request->author;
    $blog->time_to_read = $request->time_to_read;
    $blog->for_kid = boolval($request->for_kid);
    $blog->content = $request->content;
    $blog->save();

    return redirect('/blogs');
});

Route::get('/blogs/{blogId}/edit', function($blogId) {
    $blog = Blog::find($blogId);

    return view('blog.edit', ['blog' => $blog]);
});

Route::post('/blogs/{blogId}/edit', function(Request $request, $blogId) {
    $blog = Blog::find($blogId);
    $blog->title = $request->title;
    $blog->author = $request->author;
    $blog->time_to_read = $request->time_to_read;
    $blog->for_kid = boolval($request->for_kid);
    $blog->content = $request->content;
    $blog->save();

    return redirect('/blogs');
});

Route::get('/blogs/{blogId}/delete', function($blogId) {
    $blog = Blog::find($blogId);
    $blog->delete();

    return redirect('/blogs');
});
