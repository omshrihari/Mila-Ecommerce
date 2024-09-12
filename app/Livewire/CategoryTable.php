<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    public function status($id)
    {
        $category = Category::find($id);
        if($category->status == '1'){
            $category->status = '0';
        }else{
            $category->status = '1';
        }
        $category->update();
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-table',compact('categories'));
    }
}
