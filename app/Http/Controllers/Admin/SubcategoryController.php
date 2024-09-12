<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $page_title = 'Subcategory';

    public function index()
    {
        $page_title = $this->page_title;
        return view('admin.management.subcategory',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $page_title = $this->page_title;
        return view('admin.adds.subcategory',compact('categories', 'page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required',
            'status' => 'required',
            'image' => 'image',
        ]);

        $subcategoryData = $request->all();

        if($request->hasFile('image')){
            $filename = $request->file('image')->store('subcategory', 'public_uploads');
            $subcategoryData['image'] = $filename;
        }

        $subcategoryData['slug'] = Str::slug($subcategoryData['title']);

        Subcategory::create($subcategoryData);

        return redirect()->route('admin.subcategory.index')->with('success', 'Subcategory created successfully');
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
        $categories = Category::all();
        $page_title = $this->page_title;
        $subcategory = Subcategory::find($id);

        return view('admin.edits.subcategory',compact('categories', 'page_title', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required',
            'status' => 'required',
            'image' => 'image',
        ]);

        $subcategory = Subcategory::find($id);
        $subcategoryData = $request->all();
        $subcategoryData['slug'] = Str::slug($subcategoryData['title']);

        if($request->hasFile('image')){
            $filename = $request->file('image')->store('subcategory', 'public_uploads');
            try {
                Storage::disk('public_uploads')->delete($subcategory->banner);
            } catch (\Throwable $th) {
                //handle exception
            }
        }else{
            $filename = $subcategory->image;
        }

        $subcategoryData['image'] = $filename;
        $subcategory->update($subcategoryData);

        return redirect()->route('admin.subcategory.index')->with('success', 'Subcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategory::find($id);
        try {
            Storage::disk('public_uploads')->delete($subcategory->banner);
        } catch (\Throwable $th) {
            //handle exception
        }
        $subcategory->delete();
        return redirect()->route('admin.subcategory.index')->with('error', 'Subcategory deleted successfully');
    }
}
