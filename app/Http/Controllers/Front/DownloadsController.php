<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Download;
use App\Models\Link;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function downloads()
    {
        $downloads = Download::all();
        $categories = Category::with('documents')->orderBy('id')->get();
        $links = Link::orderBy('id')->get();
        return view('front.downloads', compact(
            'downloads',
            'categories',
            'links'
        ));
    }
}
