<li><a href="{{ route('cart') }}">
    @if (Cart::instance('cart')->count() > 0)
        <i class="far fa-cart-plus"></i> {{ Cart::instance('cart')->count() }}
        Cart
        @endif
</a>
</li>