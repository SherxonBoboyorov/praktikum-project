<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateContact;
use App\Http\Requests\Admin\UpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id')->get();
        return view('admin.contact.index', compact(
            'contacts'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateContact  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContact $request)
    {
        $data = $request->all();

        $data['image'] = Contact::uploadImage($request);

        if(Contact::create($data)) {
             return redirect()
                   ->route('contact.index')
                   ->with("message", "Created successfullly!");
        }

        return redirect()
               ->route('contact.index')
               ->with("message", "Failed to add successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact(
            'contact'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateContact  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContact $request, $id)
    {
        $contact = Contact::find($id);

        $data = $request->all();

        $data['image'] = Contact::updateImage($request, $contact);

        if($contact->update($data)) 
        {
            return redirect()
                   ->route('contact.index')
                   ->with("message", "Updated successfully!");
        }
        return redirect()
               ->route('contact.index')
               ->with("message", "Failed to updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (File::exists(public_path() . $contact->image)) {
            File::delete(public_path() . $contact->image);
        }

        if ($contact->delete()) {
            return redirect()
                   ->route('contact.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('contact.index')
                ->with('message', "failed to delete successfully!");
    }
}
