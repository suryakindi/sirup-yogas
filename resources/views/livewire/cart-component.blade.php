<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            @if(session()->has('success_message'))
                           <script>alert('Sukses Menambahkan Item Ke Keranjang!')</script>
                            @endif
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Cart::count() > 0)
                                    @foreach (Cart::content() as $item)
                                        
                             
                                    <tr>
                                        <td class="image product-thumbnail"><img src="/assets/imgs/shop/{{$item->model->image}}" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="#">{{$item->model->name_product}}</a></h5>
                                            
                                        </td>
                                        <td class="price" data-title="Price"><span>@currency($item->model->price)</span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="#" class="qty-down"  wire:click.prevent="removeQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">{{$item->qty}}</span>
                                                <a href="#" class="qty-up" wire:click.prevent="addQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>{{$item->subtotal}}</span>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#" class="text-muted" wire:click.prevent="removeCart('{{$item->rowId}}')"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <p style="text-align: center"> No Item In Cart</p>
                                @endif
                            </table>
                        </div>
                        <div class="cart-action text-end">
                            @if(Cart::count() > 0)
                            
                            <a class="btn " href="/shop"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                            
                            @else
                            <a class="btn " href="/shop"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                            @endif
                        </div>
                        @if(Cart::count() > 0)
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="heading_s1 mb-3">
                                    <h4>Informasi Pengiriman</h4>
                                </div>
                                <p class="mt-15 mb-30">Biaya Pengiriman<span class="font-xl text-brand fw-900"> 0%</span></p>
                                <p> Dapat Dikirim Ke Seluruh Indonesia</p>
                                <p> Pembayaran : </p>
                                <p> Non Tunai ( Transfer Rekening )</p>
                                <p> Tunai / COD </p>
                                
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Cart Subtotal</td>
                                                    <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">Rp.{{Cart::subtotal()}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Pengiriman</td>
                                                    <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Total</td>
                                                    <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">Rp.{{Cart::subtotal()}}</span></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="checkout.html" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <p style="text-align: center"> No Item In Cart</p>
                    @endif
                </div>
            </div>
        </section>
    </main>
</div>
