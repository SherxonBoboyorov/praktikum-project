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
        $abouts = Page::orderBy('id')->get();
        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('front.about', compact(
            'abouts',
            'contacts'
        ));
    }
}
