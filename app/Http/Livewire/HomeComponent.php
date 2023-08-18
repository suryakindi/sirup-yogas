<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
class HomeComponent extends Component
{
    public function render()
    {
        $product = Product::latest()->take(10)->get();
        
        return view('livewire.home-component', compact('product'));
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        // session()->flash('success_message', 'Item added in cart');
        // return redirect()->route('shop.cart');
    }
}
