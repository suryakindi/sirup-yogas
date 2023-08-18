<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function addQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function removeQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }
    
    public function removeCart($rowId)
    {
        
        Cart::remove($rowId);
    }

    
    public function render()
    {
        
        return view('livewire.cart-component');
    }
}
