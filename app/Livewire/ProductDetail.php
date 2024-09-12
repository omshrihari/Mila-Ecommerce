<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product = null;
    #[Validate]
    public $qty = 1;

    public function mount($slug){
        $this->product = Product::where(['slug' => $slug, 'status' => '1'])->first();
    }

    public function rules()
    {
        return [
            'qty' => 'required|min:1|numeric|max:20',
        ];
    }

    public function save(){

        $cart = Session::get('cart', []);

        $product = Product::find($this->product->id);

        foreach ($cart as $c) {
            if ($c['product_id'] == $this->product->id) {
                session()->flash('error', 'Item already exists');
                return 0;
            }
        }

        $item = array(
            'product_id' => $this->product->id,
            'product_name' => $product->name,
            'product_image' => $product->image,
            'product_qty' => $this->qty,
            'product_price' => $product->price,
        );

        $cart[] = $item;

        Session::put('cart', $cart);

        $this->dispatch('cartUpdated'); 
    }

    public function addToCart($id){

    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
