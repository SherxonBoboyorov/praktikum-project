<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id) 
    {
        $articles = Article::find($id);
        return view('front.news', compact(
            'articles'
        ));
    }
}
