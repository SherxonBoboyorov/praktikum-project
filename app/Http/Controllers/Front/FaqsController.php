<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function partners() 
    {
        $faqs = Faq::orderBy('id')->get();

        return view('front.partners', compact(
            'faqs'
        ));
    }
}
