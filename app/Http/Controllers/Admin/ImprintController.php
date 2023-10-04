<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateImprint;
use App\Http\Requests\Admin\UpdateImprint;
use App\Models\Imprint;
use Illuminate\Http\Request;

class ImprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imprints = Imprint::all();
        return view('admin.imprint.index', compact(
            'imprints'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imprint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateImprint  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateImprint $request)
    {
        $data = $request->all();
        
        if(Imprint::create($data)) {
            return redirect()
                   ->route('imprint.index')
                   ->with("message", 'Created successfully!');
        }
            return redirect()
                    ->route('imprint.index')
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
        $imprint = Imprint::find($id);
        return view('admin.imprint.edit', compact(
            'imprint'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateImprint  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImprint $request, $id)
    {
        $imprint = Imprint::find($id);

        $data = $request->all();

        if($imprint->update($data)) 
        {
            return redirect()
                   ->route('imprint.index')
                   ->with("message", "Updated successfully!");
        }

        return redirect()
               ->route('imprint.index')
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
        $imprint = Imprint::find($id);

        if ($imprint->delete()) {
            return redirect()
                   ->route('imprint.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('imprint.index')
                ->with('message', "failed to delete successfully!");
    }
}
