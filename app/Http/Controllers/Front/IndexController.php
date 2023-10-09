<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homePage() 
    {
        $sliders = Slider::orderBy('id')->get();
        $articles = Article::orderBy('id')->paginate(2);
        
        return view('front.index', compact(
            'sliders',
            'articles'
        ));
    }

    public function list()
    {
        $articles = Article::orderBy('id')->get();
        return view('front.index', compact(
            'articles'
        ));
    }

    public function show($id) 
    {
        $article = Article::find($id);

        return view('front.news', compact(
            'article'
        ));
    }
}
