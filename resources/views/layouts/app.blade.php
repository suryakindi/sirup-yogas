<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Sirup Yogas</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.ico')}}">
<link rel="stylesheet" href=" {{asset ('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset ('assets/css/custom.css ')}}">
@livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                       Online Store 
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <marquee width="100%" direction="left">

                            <h4>Selamat datang di store SI Prugas Delima</h4>
                             
                             </marquee>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            
                            @auth
                            <ul>                                
                                <li><i class="fi-rs-user"></i>{{Auth()->user()->name}} / 
                                    <form action="{{Route('logout')}}" method="POST">
                                    @csrf
                                    <a href="{{Route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        Logout
                                    </a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>                                
                                <li><i class="fi-rs-key"></i><a href="{{Route('login')}}">Log In </a>  / <a href="{{Route('register')}}">Sign Up</a></li>
                            </ul>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    
                    <div class="header-right">
                        <div class="search-style-1">
                            <form action="/shop" method="POST">
                                @csrf                                
                                <input type="text" name="search" placeholder="Search for items...">
                               
                            </form>
                        </div>
                        <div class="header-action-right">
                            @livewire('cart-icon-component')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><p>Sirup Yogas</p></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Home </a></li>
                                    <li><a href="/profile">Profil</a></li>
                                    <li><a href="/shop">Belanja</a></li>                                 
                                    <li><a href="/contact">Contact</a></li>
                                    @if(Auth()->check())
                                    @if(Auth()->user()->utype == 'ADM')
                                    <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{Route('admin.dashboard')}}">Dashboard</a></li>
                                                                                     
                                        </ul>
                                    </li>
                                    @else
                                    <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{Route('user.dashboard')}}">Dashboard</a></li>
                                                                                     
                                        </ul>
                                    </li>
                                    @endif
                                    @endif
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Phone / Whatsapp:</span> 0857 1362 2235 </p>
                    </div>
                    
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('shop.cart')}}">
                                    <img alt="Surfside Media" src="{{asset('/assets/imgs/theme/icons/icon-cart.svg')}}">
                                    @if(Cart::count() > 0)
                                    <span class="pro-count blue">{{Cart::count()}}</span>
                                    @endif
                                </a>
                                
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><p>Sirup Yogas</p></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="/shop" method="POST">
                        @csrf          
                        <input type="text" name="search" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-0">
                        <a href="/"> Home </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="/profile">Profile </a>                        
                    </div>
                    <div class="single-mobile-header-info">                        
                        <a href="/shop">Belanja</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="/contact">Contact </a>
                    </div>
                    <div class="single-mobile-header-info">
                        @auth
                            <ul>                                
                                <li>{{Auth()->user()->name}} / 
                                    <form action="{{Route('logout')}}" method="POST">
                                    @csrf
                                    <a href="{{Route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        Logout
                                    </a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>                                
                                <li><a href="{{Route('login')}}">Log In </a>  / <a href="{{Route('register')}}">Sign Up</a></li>
                            </ul>
                            @endif
                    </div>
                </div>
               
            </div>
        </div>
    </div>        
   {{$slot}}

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                
                                <h4 class="font-size-20 mb-0 ml-3"></h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0"><strong></strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                       
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><p>Sirup Yogas</p></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Pemilik Usaha: </strong>Neindar Yogo Suharto
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Alamat: </strong> <a href="https://maps.app.goo.gl/s4zvTWoXXFr9fyF49"> 6V7H+P5P, Ngelo, Karangbener, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59323</a>
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone / Whatsapp: </strong>0857 1362 2235
                            </p>
                           
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="/profile">Profil</a></li>
                            <li><a href="#">Informasi Pengiriman</a></li>
                            <li><a href="#">Contact </a></li>                            
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Track My Order</a></li>                            
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Metode Pembayaran</h5>
                        <div class="row">
                            
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Tunai / Non Tunai</p>
                                <img class="wow fadeIn animated" src="/assets/imgs/theme/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">SirupYogas</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>    
    <!-- Vendor JS-->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="/{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js ')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<!-- Template  JS -->
<script src="{{asset('assets/js/main.js?v=3.3')}}"></script>
<script src="{{asset('assets/js/shop.js?v=3.3')}}"></script>
@livewireScripts
</body>

</html>