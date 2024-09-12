<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProductCard extends Component
{
    public $product;

    public function mount($product){
        $this->product = $product;
    }

    public function addToCart($id)
    {
        $cart = Session::get('cart', []);

        $product = Product::find($id);

        foreach ($cart as $c) {
            if ($c['product_id'] == $id) {
                session()->flash('error', 'Item already exists');
                return 0;
            }
        }

        $item = array(
            'product_id' => $id,
            'product_name' => $product->name,
            'product_image' => $product->image,
            'product_qty' => 1,
            'product_price' => $product->price,
        );

        $cart[] = $item;

        Session::put('cart', $cart);

        $this->dispatch('cartUpdated'); 
    }

    public function render()
    {
        return view('livewire.product-card');
    }
}
