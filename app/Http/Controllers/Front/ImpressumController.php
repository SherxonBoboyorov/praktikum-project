<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Imprint;
use Illuminate\Http\Request;

class ImpressumController extends Controller
{
    public function impressum() 
    {
        $imprints = Imprint::all();
        return view('front.impressum', compact(
            'imprints'
        ));

        
    }
}
