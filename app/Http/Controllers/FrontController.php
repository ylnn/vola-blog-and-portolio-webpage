<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'POST')->where('status', 'published')->latest()->get();
        return view('front.home', compact('posts'));
    }

    public function post(Post $post)
    {
        //check published
        if($post->status != 'PUBLISHED'){
            abort(404);
        }
       return view('front.post', compact('post'));
    }

    public function portfolio()
    {
        $portfolios = Post::where('type', 'PORTFOLIO')->where('status', 'published')->latest()->get();
        return view('front.portfolios', compact('portfolios'));
    }

    public function portfolioDetail($portfolioID)
    {
        $portfolio = Post::where('type', 'PORTFOLIO')->where('status', 'PUBLISHED')->first();

        if(is_null($portfolio)){
            abort(404);
        }

        //check published
        if($portfolio->status != 'PUBLISHED'){
            abort(404);
        }
       return view('front.post', compact('portfolio'));
    }
}
