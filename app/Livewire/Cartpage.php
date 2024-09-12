<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Cartpage extends Component
{
    public $carts;
    public $totalPrice;

    public function mount()
    {
        $this->getCartData();
        $this->totalPrice = $this->getTotalPrice();
    }
    public function getCartData()
    {
        $this->carts = Session::get('cart');
    }

    public function removeItem($id)
    {
        $cart = Session::get('cart');

        if ($cart) {
            unset($cart[$id]);
            Session::put('cart', $cart);
            $this->carts = Session::get('cart');
            $this->dispatch('cartUpdated');
        }

    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        $cart = Session::get('cart');

        if ($cart) {
            foreach ($cart as $item) {
                $totalPrice += $item['product_price'] * $item['product_qty'];
            }
        }

        return $totalPrice;
    }

    public function updateQuantity($id,$quantity){
        $cart = Session::get('cart');

        if ($cart && $quantity > 0) {
            $cart[$id]['product_qty'] = $quantity;
            Session::put('cart', $cart);
            $this->carts = Session::get('cart');
            $this->dispatch('cartUpdated');
            $this->totalPrice = $this->getTotalPrice();
        }

    }

    

    public function render()
    {
        return view('livewire.cartpage');
    }
}
