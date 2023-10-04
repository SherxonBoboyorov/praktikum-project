<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProtection;
use App\Http\Requests\Admin\UpdateProtection;
use App\Models\Protection;
use Illuminate\Http\Request;

class ProtectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protections = Protection::all();
        return view('admin.protection.index', compact(
            'protections'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.protection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProtection  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProtection $request)
    {
        $data = $request->all();

        if(Protection::create($data)) {
            return redirect()
            ->route('protection.index')
            ->with("message", 'Created successfully!');
        }
        return redirect()
                ->route('protection.index')
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
        $protection = Protection::find($id);
        return view('admin.protection.edit', compact(
            'protection'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProtection  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProtection $request, $id)
    {
        $protection = Protection::find($id);

        $data = $request->all();

        if($protection->update($data)) 
        {
            return redirect()
                   ->route('protection.index')
                   ->with("message", "Updated successfully!");
        }

        return redirect()
               ->route('protection.index')
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
        $protection = Protection::find($id);

        if ($protection->delete()) {
            return redirect()
                   ->route('protection.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('protection.index')
                ->with('message', "failed to delete successfully!");
    }
}
