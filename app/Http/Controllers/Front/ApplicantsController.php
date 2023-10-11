<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Slider;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function list()
    {
        $applicants = Applicant::orderBy('created_at', 'DESC')->get();
        $sliders = Slider::orderBy('id')->get();

        return view('front.applicant.list', compact(
            'applicants',
            'sliders'
        ));
    } 

    public function show($slug) 
    {
        $applicant = Applicant::where('slug_de', $slug)
              ->orWhere('slug_en', $slug)
              ->first();
        return view('front.applicant.show', compact(
            'applicant'
        ));
    }
}
