<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SixLevelBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SixBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $page_title = 'Six Banner';

    public function index()
    {
        $page_title = $this->page_title;
        $banner = SixLevelBanner::first();
        return view('admin.management.six_level_banner', compact('page_title', 'banner'));
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
        $banner = SixLevelBanner::find($id);
        $update = $request->all();

        if($request->hasFile('banner1')){
            $filename = $request->file('banner1')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner1);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['banner1'] = $filename;
        }
        
        if($request->hasFile('banner2')){
            $filename = $request->file('banner2')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner2);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['banner2'] = $filename;
        }

        if($request->hasFile('banner3')){
            $filename = $request->file('banner3')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner3);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['banner3'] = $filename;
        }

        if($request->hasFile('banner4')){
            $filename = $request->file('banner4')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner4);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['banner4'] = $filename;
        }

        if($request->hasFile('banner5')){
            $filename = $request->file('banner5')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner5);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['banner5'] = $filename;
        }
        
        $banner->update($update);

        return redirect()->route('admin.sixlevelbanner.index')->with('success', 'banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
