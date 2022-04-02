<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => \App\Models\Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->onEachSide(1)->withQueryString()
        ]);
    }
    public function show(\App\Models\Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
