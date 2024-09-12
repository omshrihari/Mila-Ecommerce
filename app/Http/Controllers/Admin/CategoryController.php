<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $page_title = 'Category';

    public function index()
    {
        $page_title = $this->page_title;
        return view('admin.management.category',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = $this->page_title;
        return view('admin.adds.category', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        $categoryData = $request->all();

        $categoryData['slug'] = Str::slug($categoryData['title']);

        Category::create($categoryData);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');
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
        $category = Category::find($id);
        $page_title = $this->page_title;
        return view('admin.edits.category', compact('category','page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        $category = Category::find($id);
        $categoryData = $request->all();
        $categoryData['slug'] = Str::slug($categoryData['title']);
        $category->update($categoryData);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
     
        return redirect()->route('admin.category.index')->with('error', 'Category Deleted successfully');
    }
}
