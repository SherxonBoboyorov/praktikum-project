<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDownload;
use App\Http\Requests\Admin\UpdateDownload;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::all();
        return view('admin.download.index', compact(
            'downloads'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDownload  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDownload $request)
    {
        $data = $request->all();

        if(Download::create($data)) {
            return redirect()
            ->route('download.index')
            ->with("message", 'Created successfully!');
        }
        return redirect()
                ->route('download.index')
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
        $download = Download::find($id);
        return view('admin.download.edit', compact(
            'download'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDownload  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDownload $request, $id)
    {
        $download = Download::find($id);

        $data = $request->all();

        if($download->update($data)) 
        {
            return redirect()
                   ->route('download.index')
                   ->with("message", "Updated successfully!");
        }

        return redirect()
               ->route('download.index')
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
        $download = Download::find($id);

        if ($download->delete()) {
            return redirect()
                   ->route('download.index')
                   ->with('message', "deleted successfully!");
        }

        return redirect()
                ->route('download.index')
                ->with('message', "failed to delete successfully!");
    }
}
