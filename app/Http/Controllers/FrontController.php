<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Spatie\SchemaOrg\Schema;
use TCG\Voyager\Facades\Voyager;
use Carbon\Carbon;
use TCG\Voyager\Models\Setting;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'POST')->latest()->get();

        $url = url("/");
        $siteSchema = Schema::webSite()
            ->name(setting('site.title'))
            ->description(setting('site.description'))
            ->url($url)
            ->dateModified($posts[0]->updated_at)
            ->copyrightYear(2018)
            ;

        return view('front.home', compact('posts', 'siteSchema'));
    }

    public function post(Post $post)
    {
        //check published
        if((!auth()->check()) and ($post->status != 'PUBLISHED')) {
            abort(404);
        }

        $creativeWork = Schema::article()
            ->headline($post->title)
            ->text($post->body)
            ->datePublished($post->created_at)
            ->dateModified($post->updated_at);

       return view('front.post', compact('post', 'creativeWork'));
    }

    public function portfolio()
    {
        $portfolios = Post::where('type', 'PORTFOLIO')->where('status', 'published')->orderBy('order', 'ASC')->get();
        return view('front.portfolios', compact('portfolios'));
    }

    public function portfolioDetail($portfolioID)
    {
        $portfolio = Post::where('id', $portfolioID)->where('type', 'PORTFOLIO')->where('status', 'PUBLISHED')->first();

        if(is_null($portfolio)){
            abort(404);
        }

        //check published
        if($portfolio->status != 'PUBLISHED'){
            abort(404);
        }
       return view('front.portfolio', compact('portfolio'));
    }
}
