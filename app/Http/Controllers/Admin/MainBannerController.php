<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $page_title = 'Main Banner';

    public function index()
    {
        $banners = MainBanner::all();
        $page_title = $this->page_title;
        return view('admin.management.mainBanner', compact('banners','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = $this->page_title;
        return view('admin.adds.mainBanner', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner' => 'required|image',
            'status' => 'required',
            'link' => 'required'
        ]);

        $bannerData = $request->all();
        $filename = $request->file('banner')->store('banners', 'public_uploads');
        
        $bannerData['banner'] = $filename;

        MainBanner::create($bannerData);

        return redirect()->route('admin.mainbanner.index')->with('success', 'Banner successfully created');
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
        $banner = MainBanner::find($id);
        $page_title = $this->page_title;
        return view('admin.edits.mainBanner', compact('banner','page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required',
            'link' => 'required'
        ]);

        $banner = MainBanner::find($id);
        $bannerData = $request->all();

        if($request->hasFile('banner')){
            $filename = $request->file('banner')->store('banners', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($banner->banner);
            } catch (\Throwable $th) {
                //handle exception
            }
            $bannerData['banner'] = $filename;
        }else{
            $bannerData['banner'] = $banner->banner;
        }

        $banner->update($bannerData);

        return redirect()->route('admin.mainbanner.index')->with('success', 'Banner successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = MainBanner::find($id);

        try {
            Storage::disk('public_uploads')->delete($banner->banner);
        } catch (\Throwable $th) {
            //handle exception
        }
        
        $banner->delete();

        return redirect()->route('admin.mainbanner.index')->with('error', 'Banner successfully deleted');
    }
}
