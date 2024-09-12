<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FiveLevelBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiveBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $page_title = 'Five Banner';
    public function index()
    {
        $page_title = $this->page_title;
        $banner = FiveLevelBanner::first();
        return view('admin.management.five_level_banner', compact('banner','page_title'));
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
        $banner = FiveLevelBanner::find($id);
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
        
        $banner->update($update);

        return redirect()->route('admin.fivelevelbanner.index')->with('success', 'banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
