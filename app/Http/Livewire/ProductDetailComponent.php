<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
use App\Models\Likeproduct;
class ProductDetailComponent extends Component
{
    public $product;
    public $like;
    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->like = Likeproduct::where('id_product', $id)->count();
    }

    public function render()
    {   
      
        $newproduct = Product::latest()->take(6)->get();
        $item = $this->product;
        $like_item = $this->like;
        
        return view('livewire.product-detail-component',compact('item', 'newproduct', 'like_item'));
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('shop.cart');
    }
}
