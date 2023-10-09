<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function list()
    {
        $employers = Employer::orderBy('created_at', 'DESC')->get();
        return view('front.employer.list', compact(
            'employers'
        ));
    }

    public function show($slug) 
    {
        $employer = Employer::where('slug_de', $slug)
              ->orWhere('slug_en', $slug)
              ->first();
        return view('front.employer.show', compact(
            'employer'
        ));
    }
}
