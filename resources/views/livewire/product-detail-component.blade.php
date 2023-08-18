<div>
    <div>
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow">Home</a>
                        <span></span> Product
                    
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-detail accordion-detail">
                                <div class="row mb-50">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-gallery">
                                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                            <!-- MAIN SLIDES -->
                                            <div class="product-image-slider">
                                               
                                                <figure class="border-radius-10">
                                                    <img src="/assets/imgs/shop/{{$item->image}}" alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="/assets/imgs/shop/{{$item->image}}" alt="product image">
                                                </figure>
                                            </div>
                                            <!-- THUMBNAILS -->
                                            <div class="slider-nav-thumbnails pl-15 pr-15">
                                                <div><img src="/assets/imgs/shop/{{$item->image}}" alt="product image"></div>
                                                <div><img src="/assets/imgs/shop/{{$item->image}}" alt="product image"></div>
                                            </div>
                                        </div>
                                        <!-- End Gallery -->
                                        
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-info">
                                            <h2 class="title-detail">{{$item->name_product}}</h2>
                                            <div class="product-detail-rating">
                                                <div class="pro-details-brand">
                                                    <span> Brands: <a href="shop.html">Sirup</a></span>
                                                </div>
                                                <div class="product-rate-cover text-end">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:100%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> ({{$like_item}} Like)</span>
                                                </div>
                                            </div>
                                            <div class="clearfix product-price-cover">
                                                <div class="product-price primary-color float-left">
                                                    <ins><span class="text-brand">@currency($item->price)</span></ins>
                                                   
                                                </div>
                                            </div>
                                            <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                            <div class="short-desc mb-30">
                                                <p>{{$item->description}}</p>
                                            </div>
                                            <div class="product_sort_info font-xs mb-30">
                                                <ul>
                                                    <li><i class="fi-rs-credit-card mr-5"></i> Tunai Dan Non Tunai</li>
                                                </ul>
                                            </div>
                                            
                                            
                                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                            <div class="detail-extralink">
                                                <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                    <span class="qty-val">1</span>
                                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                </div>
                                                <div class="product-extra-link2">
                                                    <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{$item->id}}, '{{$item->name_product}}', {{$item->price}})">Add to cart</button>
                                                    <a aria-label="Like Product" class="action-btn hover-up" href="/shop/like/{{$item->id}}"><i class="fi-rs-heart"></i></a>
                                                </div>
                                            </div>
                                            <ul class="product-meta font-xs color-grey mt-0">
                                                <li>Stock:<span class="in-stock text-success ml-5">{{$item->quantity}} Items In Stock</span></li>
                                            </ul>
                                        </div>
                                        <!-- Detail Info -->
                                    </div>
                                </div>
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                        </li>
                                        
                                     
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                    tightly neurotic hungrily some and dear furiously this apart.</p>
                                                <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                                    besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                                </p>
                                                <ul class="product-more-infor mt-30">
                                                    <li><span>Type Of Packing</span> Bottle</li>
                                                    <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                                    <li><span>Quantity Per Case</span> 100ml</li>
                                                    <li><span>Ethyl Alcohol</span> 70%</li>
                                                    <li><span>Piece In One</span> Carton</li>
                                                </ul>
                                                <hr class="wp-block-separator is-style-dots">
                                                <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                                    energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                                
                                               
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                                           
                            </div>
                        </div>
                        <div class="col-lg-3 primary-sidebar sticky-sidebar">
                           
                            <!-- Fillter By Price -->
                            
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title mb-10">Related Product</h5>
                                    <div class="bt-1 border-color-1"></div>
                                </div>
                                @foreach ($newproduct as $item)
                          
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="/assets/imgs/shop/{{$item->image}}" alt="#">
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
    </div>
    
</div>
