<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'POST')->latest()->get();
        return view('front.home', compact('posts'));
    }

    public function post(Post $post)
    {
       return view('front.post', compact('post'));
    }
}
