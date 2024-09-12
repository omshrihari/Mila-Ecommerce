<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class FetchSubcategory extends Component
{

    public $subcategories = null;
    public $selectcat_id = null;
    public $selectsubcat_id = null;

    public function fetchSubCats($id)
    {
        $this->subcategories = Subcategory::where('category_id', $id)->where('status','1')->get();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.fetch-subcategory', compact('categories'));
    }
}
