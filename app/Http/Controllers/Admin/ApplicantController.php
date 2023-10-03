<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateApplicant;
use App\Http\Requests\Admin\UpdateApplicant;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::orderBy('id')->paginate(12);
        return view('admin.applicant.index', compact(
            'applicants'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateApplicant $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateApplicant $request)
    {
        $data = $request->all();

        $data['image'] = Applicant::uploadImage($request);
        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Applicant::create($data)) {
            return redirect()
                   ->route('applicant.index')
                   ->with("message", 'Created successfully!');
        }
        return redirect()
               ->route('applicant.index')
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicant = Applicant::find($id);
        return view('admin.applicant.edit', compact(
            'applicant'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateApplicant  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicant $request, $id)
    {
        $applicant = Applicant::find($id);

        $data = $request->all();

        $data['image'] = Applicant::updateImage($request, $applicant);
        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if($applicant->update($data)) 
        {
            return redirect()
                   ->route('applicant.index')
                   ->with("message", "Updated successfully!");
        }

        return redirect()
               ->route('applicant.index')
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
        $applicant = Applicant::find($id);

        if (File::exists(public_path() . $applicant->image)) {
            File::delete(public_path() . $applicant->image);
        }

        if ($applicant->delete()) {
            return redirect()
                   ->route('applicant.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('applicant.index')
                ->with('message', "failed to delete successfully!");
    }
}
