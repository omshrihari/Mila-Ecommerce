<?php

namespace App\Livewire;

use App\Models\SubsubCategory;
use Livewire\Component;

class SubsubcategoryTable extends Component
{
    public function status($id)
    {
        $subsubcategory = SubsubCategory::find($id);
        if($subsubcategory->status == '1'){
            $subsubcategory->status = '0';
        }else{
            $subsubcategory->status = '1';
        }
        $subsubcategory->update();
    }
    public function render()
    {
        $subsubcategories = Subsubcategory::all();
        return view('livewire.subsubcategory-table',compact('subsubcategories'));
    }
}
