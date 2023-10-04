<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $pages = Page::all();
        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('front.about', compact(
            'pages',
            'contacts'
        ));
    }
}
