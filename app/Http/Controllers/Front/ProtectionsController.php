<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Protection;
use Illuminate\Http\Request;

class ProtectionsController extends Controller
{
    public function dataProtection()
    {
        $protections = Protection::all();
        return view('front.data-protection', compact(
            'protections'
        ));
    }
}
