<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEmployer;
use App\Http\Requests\Admin\UpdateEmployer;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::orderBy('id')->paginate(12);
        return view('admin.employer.index', compact(
            'employers'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEmployer  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployer $request)
    {
        $data = $request->all();

        $data['image'] = Employer::uploadImage($request);
        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Employer::create($data)) {
            return redirect()
                   ->route('employer.index')
                   ->with("message", 'Created successfully!');
        }
        return redirect()
               ->route('employer.index')
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
        $employer = Employer::find($id);
        return view('admin.employer.edit', compact(
            'employer'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEmployer  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployer $request, $id)
    {
        $employer = Employer::find($id);

        $data = $request->all();

        $data['image'] = Employer::updateImage($request, $employer);
        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if($employer->update($data)) 
        {
            return redirect()
                   ->route('employer.index')
                   ->with("message", "Updated successfully!");
        }

        return redirect()
               ->route('employer.index')
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
        $employer = Employer::find($id);

        if (File::exists(public_path() . $employer->image)) {
            File::delete(public_path() . $employer->image);
        }

        if ($employer->delete()) {
            return redirect()
                   ->route('employer.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('employer.index')
                ->with('message', "failed to delete successfully!");
    }
}
