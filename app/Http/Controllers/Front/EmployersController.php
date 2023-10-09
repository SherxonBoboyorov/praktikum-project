<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function list()
    {
        $employers = Employer::orderBy('id')->get();
        return view('front.employer.list', compact(
            'employers'
        ));
    }

    public function show($id) 
    {
        $employer = Employer::find($id);
        return view('front.employer.show', compact(
            'employer'
        ));
    }
}
