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
}
