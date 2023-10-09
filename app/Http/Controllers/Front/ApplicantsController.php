<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function list()
    {
        $applicants = Applicant::orderBy('created_at', 'DESC')->get();

        return view('front.applicat.list', compact(
            'applicants'
        ));
    } 

    public function show($slug) 
    {
        $applicant = Applicant::where('slug_de', $slug)
              ->orWhere('slug_en', $slug)
              ->first();
        return view('front.applicat.show', compact(
            'applicant'
        ));
    }
}
