<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Likeproduct;
use Cart;

class ShopComponent extends Component
{
    public function render(Request $request)
    {
        
        if($request->show){
            $item = $request->show;   
            $product = Product::paginate($item);
        }elseif($request->search){
            $product = Product::where('name_product', 'LIKE', '%'.$request->search.'%')->paginate(6);
        }else{
            $product = Product::paginate(6);
        }
      

        $newproduct = Product::latest()->take(3)->get();
        $count = Product::all()->count();
        return view('livewire.shop-component',compact('product', 'count', 'newproduct'));
    }
    public function store($product_id, $product_name, $product_price)
    {
        // $user = Auth()->user()->email;
        
        // To store a cart instance named 'wishlist'
       
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        // session()->flash('success_message', 'Item added in cart');
        
        // return redirect()->route('shop.cart');
    }
    
    public function likeproduct($id)
    {
        $like = new Likeproduct;
        $like->id_product = $id;
        $like->like = 1;
        $like->save();
        return redirect()->back();
    }
}
