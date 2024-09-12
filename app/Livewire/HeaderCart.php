<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\On; 

class HeaderCart extends Component
{
    public $cartTotal = 0;
    public $cartItemCount = 0;
    public $carts = array();

    public function mount()
    {
        $this->getTotal();
    }
    #[on('cartUpdated')]
    public function getTotal()
    {
        $cart = Session::get('cart');
        if ($cart) {
            $this->cartTotal = 0;
            $this->cartItemCount = count($cart);
            foreach ($cart as $c) {
                $this->cartTotal += $c['product_qty'] * $c['product_price'];
            }
        }

        $this->carts = $cart;
        $this->cartTotal = $cart ? $this->cartTotal : 0;
        $this->cartItemCount = $cart ? count($cart) : 0;
    }

    public function removeCartItem($id)
    {
        $cart = Session::get('cart');
    
        if ($cart) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        $this->carts = $cart;
    }

    public function render()
    {
        return view('livewire.header-cart');
    }
}
