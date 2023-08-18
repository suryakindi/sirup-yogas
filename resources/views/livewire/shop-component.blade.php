<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> Kami Menemukan <strong class="text-brand">{{$count}}</strong> Product Buat Kamu!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Pilih <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <form action="" method="POST">
                                            @csrf
                                      <select name="show">
                                        <option value="50">50</option>
                                        <option value="50">100</option>
                                        <option value="50">200</option>
                                      </select>
                                      <button type="submit" class="btn-sm btn-primary">Filter</button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="row product-grid-3">
                        @foreach ($product as $item)
                 
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
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
                                        <span>
                                    
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>@currency($item->price)</span>
                                        
                                    </div>
                                    <div class="product-action-1 show">
                                        <!-- <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$item->id}}, '{{$item->name_product}}', {{$item->price}})"><i class="fi-rs-shopping-bag-add" id="cart-data"></i></a> -->
                                        <a aria-label="Add To Cart" class="action-btn hover-up cart-items" href="#" wire:click.prevent="store({{$item->id}}, '{{$item->name_product}}', {{$item->price}})" id="{{$item->id}}" data-items-name="{{$item->name_product}}" data-items-price="{{$item->price}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                   
                        @endforeach
                    </div>
                    <!--pagination-->
                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                           <div class="flex">
                           {{$product->links()}}
                            </div> 
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Pilih Range Harga</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span>
                                        <form action="" method="POST">
                                            @csrf
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price">
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn-sm btn-danger"><i class="fi-rs-filter mr-5"></i> Fillter</button>
                                        </form>
                    </div>
                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Product Baru</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        @foreach ($newproduct as $item)
                  
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="assets/imgs/shop/{{$item->image}}" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="product-details.html">{{$item->name_product}}</a></h6>
                                <p class="price mb-0 mt-5">@currency($item->price)</p>
                            
                            </div>
                        </div>
                                  
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</main>
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
            sessionStorage.setItem('cart-shop',JSON.stringify(cartItems))
            alert("Berhasil menambahkan item !")
        })
    })
</script>