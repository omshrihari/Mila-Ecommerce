<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\YoutubeVideo;
use Illuminate\Http\Request;

class YtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $page_title = 'Youtube';

    public function index()
    {
        $page_title = $this->page_title;
        $yts = YoutubeVideo::all();
        return view('admin.management.youtube', compact('page_title', 'yts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'yt_link' => 'required'
        ]);

        $update = YoutubeVideo::find($id);
        $update->update($request->all());

        return redirect()->route('admin.yt.index')->with('success','Youtube video link have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
