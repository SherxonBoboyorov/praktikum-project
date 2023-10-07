<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partners()
    {
        return view('front.partners');
    }
}
