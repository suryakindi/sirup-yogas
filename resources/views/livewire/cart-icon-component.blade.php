<div class="header-action-2">
    
    <div class="header-action-icon-2">
        <a class="mini-cart-icon" href="{{route('shop.cart')}}">
            <img alt="Surfside Media" src="{{asset('/assets/imgs/theme/icons/icon-cart.svg')}}">
            @if(Cart::count() > 0)
            <span class="pro-count blue">{{Cart::count()}}</span>
            @endif
        </a>
        
    </div>
</div>