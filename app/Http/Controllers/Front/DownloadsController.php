<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function downloads()
    {
        $downloads = Download::all();
        return view('front.downloads', compact(
            'downloads'
        ));
    }
}
