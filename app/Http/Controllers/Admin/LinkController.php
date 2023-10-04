<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLink;
use App\Http\Requests\Admin\UpdateLink;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::orderBy('id')->paginate(12);
        return view('admin.link.index', compact(
            'links'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateLink  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLink $request)
    {
        $data = $request->all();

        if (Link::create($data)) {
            return redirect()
                   ->route('link.index')
                   ->with("message", 'Created successfully!');
                }
            return redirect()
                   ->route('link.index')
                   ->with("message", 'Failed to add successfully!');
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
        $link = Link::find($id);
        return view('admin.link.edit', compact(
            'link'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateLink  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLink $request, $id)
    {
        $link = Link::find($id);

        $data = $request->all();

        if ($link->update($data)) {
            return redirect()
                  ->route('link.index')
                  ->with('message', 'updated successfully!');
        }

        return redirect()
               ->route('link.index')
               ->with('message', 'failed to update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);

        if ($link->delete()) {
            return redirect()
                   ->route('link.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('link.index')
                ->with('message', "failed to delete successfully!");
    }
}
