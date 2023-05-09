<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', [ 'blogs' => $blogs ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->time_to_read = $request->time_to_read;
        $blog->for_kid = boolval($request->for_kid);
        $blog->content = $request->content;
        $blog->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     */
    public function edit(int $blogId)
    {
        $blog = Blog::find($blogId);

        return view('blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $blogId)
    {
        $blog = Blog::find($blogId);
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->time_to_read = $request->time_to_read;
        $blog->for_kid = boolval($request->for_kid);
        $blog->content = $request->content;
        $blog->save();

        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $blogId)
    {
        $blog = Blog::find($blogId);
        $blog->delete();

        return redirect('/blogs');
    }
}
