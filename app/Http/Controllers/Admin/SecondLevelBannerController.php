<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SecondLevelBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SecondLevelBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $page_title = 'Second Level Banner';

    public function index()
    {
        $page_title = $this->page_title;
        $banner = SecondLevelBanner::first();

        return view('admin.management.second_level_banner', compact('banner', 'page_title'));
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
        $banner = SecondLevelBanner::find($id);
        $update = $request->all();

        if($request->hasFile('main_banner')){
            $filename = $request->file('main_banner')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->main_banner);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['main_banner'] = $filename;
        }

        if($request->hasFile('small_banner1')){
            $filename = $request->file('small_banner1')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->small_banner1);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['small_banner1'] = $filename;
        }
        
        if($request->hasFile('small_banner2')){
            $filename = $request->file('small_banner2')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->small_banner2);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['small_banner2'] = $filename;
        }

        if($request->hasFile('small_banner3')){
            $filename = $request->file('small_banner3')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->small_banner3);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['small_banner3'] = $filename;
        }

        if($request->hasFile('small_banner4')){
            $filename = $request->file('small_banner4')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->small_banner4);
            } catch (\Throwable $th) {
                //handle exception
            }
            $update['small_banner4'] = $filename;
        }
        
        $banner->update($update);

        return redirect()->route('admin.secondlevelbanner.index')->with('success', 'banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
