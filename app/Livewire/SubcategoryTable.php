<?php

namespace App\Livewire;

use App\Models\Subcategory;
use Livewire\Component;

class SubcategoryTable extends Component
{
    public function status($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory->status == '1'){
            $subcategory->status = '0';
        }else{
            $subcategory->status = '1';
        }
        $subcategory->update();
    }
    public function render()
    {
        $subcategories = Subcategory::all();
        return view('livewire.subcategory-table', compact('subcategories'));
    }
}
