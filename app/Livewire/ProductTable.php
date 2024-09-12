<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    public function status($id)
    {
        $product = Product::find($id);
        if($product->status == '1'){
            $product->status = '0';
        }else{
            $product->status = '1';
        }
        $product->update();
    }
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-table', compact('products'));
    }
}
