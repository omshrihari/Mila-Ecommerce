<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubsubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubsubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $page_title = 'Sub Subcategory';

    public function index()
    {
        $page_title = $this->page_title;
        return view('admin.management.subsubcategory',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $page_title = $this->page_title;
        return view('admin.adds.subsubcategory',compact('categories', 'page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $subSubData = $request->all();
        $subSubData['slug'] = Str::slug($subSubData['title']);
        $filename = $request->file('image')->store('subsubcategory', 'public_uploads');
        $subSubData['image'] = $filename;
        SubsubCategory::create($subSubData);
        
        return redirect()->route('admin.subsubcategory.index')->with('success', 'subsubcategory created successfully');
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
        $page_title = $this->page_title;
        $subsubcategory = SubsubCategory::find($id);
        return view('admin.edits.subsubcategory',compact('page_title','subsubcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);

        $subsubcategory = SubsubCategory::find($id);
        $subsubcategoryData = $request->all();
        $subsubcategoryData['slug'] = Str::slug($subsubcategoryData['title']);

        if($request->hasFile('image')){
            $filename = $request->file('image')->store('subsubcategory', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($subsubcategory->banner);
            } catch (\Throwable $th) {
                //handle exception
            }
        }else{
            $filename = $subsubcategory->image;
        }

        $subsubcategoryData['image'] = $filename;
        $subsubcategory->update($subsubcategoryData);

        return redirect()->route('admin.subsubcategory.index')->with('success', 'Subsubcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subSubCat = SubsubCategory::find($id);
        try {
            Storage::disk('public_uploads')->delete($subSubCat->image);
        } catch (\Throwable $th) {
            //handle exception
        }

        $subSubCat->delete();

        return redirect()->route('admin.subsubcategory.index')->with('error', 'Subsubcategory successfully deleted');
    }
}
