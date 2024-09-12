<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\SubsubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $page_title = 'Product';

    public function index()
    {
        $page_title = $this->page_title;
        return view('admin.management.products',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = $this->page_title;
        $sscat = SubsubCategory::where('status','1')->get();
        return view('admin.adds.products',compact('page_title','sscat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'cats' => 'required|array',
            'status' => 'required',
            'intro' => 'required',
            'stock_status' => 'required',
        ]);

        $productData = $request->all();
        $productData['slug'] = Str::slug($productData['name']);

        $filename = $request->file('image')->store('products', 'public_uploads');
        $productData['image'] = $filename;

        if($request->hasFile('images')) {
            $multiImage = [];
            foreach ($request->images as $img) {
                $filename = $img->store('products', 'public_uploads');
                $multiImage[] = $filename;
            }
            $newImageImplode = implode('||', $multiImage);
            $productData['images'] = $newImageImplode;
        }

        $product = Product::create($productData);

        foreach($request->cats as $cat) {
            $newSubCat = SubsubCategory::find($cat);
            CategoryProduct::create([
                'category_id' => $newSubCat->subcategory->category->id,
                'subcategory_id' => $newSubCat->subcategory->id,
                'subsubcategory_id' => $newSubCat->id,
                'product_id' => $product->id,
            ]);
        }

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
