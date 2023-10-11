<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Callback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        $data = $request->all();

        $contactFeedback = Callback::create($data);

        Mail::to('sherxonbabayar@gmail.com')->send(new ContactMail($contactFeedback));

        return back()->with('message', 'Success');
    } 
}
