<div>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                   
                                    <h4 class="animated">Sirup Yogas</h4>
                                    <h4 class="animated">Menjual Sirup Dengan Berbagai Macam Varian</h4>
                                    <p class="animated">Alamat : <a href="https://maps.app.goo.gl/s4zvTWoXXFr9fyF49"> 6V7H+P5P, Ngelo, Karangbener, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59323</a></p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{route('shop')}}"> Belanja  </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="/assets/imgs/slider/slider-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                               
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Product</button>
                        </li>
                        
                        
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($product as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop/item/{{$item->id}}">
                                                <img class="default-img" src="/assets/imgs/shop/{{$item->image}}" alt="">
                                                <img class="hover-img" src="/assets/imgs/shop/{{$item->image}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="View" class="action-btn hover-up" href="/shop/item/{{$item->id}}"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Like Product" class="action-btn small hover-up" href="/shop/like/{{$item->id}}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        @if($item->quantity > 0 )
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="inthestock">In The Stock</span>
                                        </div>
                                        @else
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="outofstock">Out Of The Stock</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="#">Product</a>
                                        </div>
                                        <h2><a href="#">{{$item->name_product}}</a></h2>
                                        <div class="rating-result" title="100%">
                                         
                                        </div>
                                        <div class="product-price">
                                            <span>@currency($item->price)</span>
                                            
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up cart-items" href="#" wire:click.prevent="store({{$item->id}}, '{{$item->name_product}}', {{$item->price}})" id="{{$item->id}}" data-items-name="{{$item->name_product}}" data-items-price="{{$item->price}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                       <center> <a href="/shop"><button class="btn-sm btn-primary">Lihat Selengkapnya</button></a></center>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    
                    <!--En tab two (Popular)-->
                    
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        
        
        
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Product</span> Baru</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach ($product as $item)
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="/shop/item/{{$item->id}}">
                                        <img class="default-img" src="/assets/imgs/shop/{{$item->image}}" alt="">
                                        <img class="hover-img" src="/assets/imgs/shop/{{$item->image}}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="View" class="action-btn small hover-up" href="/shop/item/{{$item->id}}">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Like Product" class="action-btn small hover-up" href="/shop/like/{{$item->id}}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                 
                                </div>
                               
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="/shop/item/{{$item->id}}">{{$item->name_product}}</a></h2>
                               
                                <div class="product-price">
                                    <span>@currency($item->price)</span>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </section>
       
        
    </main>
</div>
<script>
    let itemsCart = document.querySelectorAll(".cart-items")
    let cartItems = []
    itemsCart.forEach((data) => {
        data.addEventListener("click",() => {
            let itemsCart = {
                productId : data.id,
                productName : data.dataset.itemsName,
                productPrice : data.dataset.itemsPrice
            }
            cartItems.push(itemsCart)
            let itemsStorage = sessionStorage.getItem('cart-shop');
            sessionStorage.setItem('cart-shop',JSON.stringify(cartItems))
            // tinggal tambah request ajax kirim data itemsCart
            alert("Berhasil menambahkan item !")
        })
    })
</script>