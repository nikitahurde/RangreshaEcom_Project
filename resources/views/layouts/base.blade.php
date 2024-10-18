<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rangresha Handcrafted Eco Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-top-area pl-165 pr-165">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-6 col-md-6">
                        <div class="header-top-wrapper">
                            <div class="header-top-info d-none d-xl-block f-left">
                                <span><i class="fas fa-heart"></i> Rangresha Handcrafted Eco Products </span>
                            </div>
                            <div class="header-link f-left">
                                <span><a href="#"><i class="far fa-phone"></i>+91 7774979944</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="header-top-right text-md-right">
                            <div class="shop-menu">
                                <ul>
                                    @auth
                                        <li><a href="{{ route('admin.dashboard') }}"><i class="fal fa-user-circle"></i>
                                                {{ Auth::user()->name }}</a></li>
                                        <li>
                                            <form method="POST" action="{{ 'logout' }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    Logout</a>
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}"><i class="fal fa-user"></i> Login</a></li>
                                        <li><a href="{{ route('register') }}"> Sign up</a></li>

                                    @endauth

                                    {{-- <li><a href="{{ route('cart') }}">
                                            @if (Cart::instance('cart')->count() > 0)
                                                <i class="far fa-cart-plus"></i> {{ Cart::instance('cart')->count() }}
                                                Cart
                                                @endif
                                        </a>
                                    </li> --}}
                                    @livewire('cart-count-component')
                                    {{-- <li><a href="{{ route('wishlist') }}">
                                        @if (Cart::instance('wishlist')->count() > 0)
                                        <i class="far fa-heart"></i> {{ Cart::instance('wishlist')->count() }}
                                        Wishlist
                                        @endif
                                    </li> --}}

                                    <li>
                                        <a href="{{ route('wishlist') }}">
                                            @livewire('wishlist-count-component')
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-menu-area menu-01 pl-165 pr-165">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('assets/img/logo/logo1.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 d-none d-lg-block">
                        <img src="{{ asset('assets/img/blogs/border.png') }}">
                        <div class="header-right f-right">
                            {{-- <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                    <div class="lang-icon">
                                        <img src="{{asset('assets/img/icon/flag.png')}}" alt="">
                                        <a href="#"><i class="far fa-angle-down"></i></a>
                                    </div>
                                    <ul class="header-lang-list">
                                        <li><a href="#">USA</a></li>
                                        <li><a href="#">UK</a></li>
                                        <li><a href="#">CA</a></li>
                                        <li><a href="#">AU</a></li>
                                    </ul>
                                </div> --}}
                            <div class="menu-bar info-bar f-right d-none d-md-none d-lg-block">
                                <a href="#"><i class="fal fa-bars"></i></a>
                            </div>
                            <div class="header-search f-right d-none d-xl-block">
                                <form class="header-search-form">
                                    <input placeholder="Search" type="text">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">home</a>
                                        {{-- <ul class="sub-menu text-left">
                                                <li><a href="index.html">home 1</a></li>
                                                <li><a href="index-2.html">home 2</a></li>
                                                <li><a href="index-3.html">home 3</a></li>
                                            </ul> --}}
                                    </li>
                                    <li><a href="{{ route('shop') }}">Shop</a>
                                        {{-- <ul class="sub-menu text-left">
                                                <li><a href="shop-grid.html">shop grid</a>
                                                <li><a href="shop-full-width.html">shop full width</a>
                                                <li><a href="shop-04-column.html">shop 04 column</a>
                                                <li><a href="shop-left-02-column.html">shop left 02 column</a>
                                                <li><a href="shop-left-sidebar.html">shop left sidebar</a>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a>
                                                <li><a href="product-details.html">product details</a>
                                                <li><a href="wishlist.html">wishlist</a>
                                                <li><a href="checkout.html">checkout</a>
                                                <li><a href="cart.html">cart</a>
                                                <li><a href="login.html">login</a>
                                                <li><a href="register.html">register</a>

                                            </ul> --}}
                                    </li>
                                    <li><a href="{{ route('productcategory') }}">Categories </a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a>
                                        {{-- <ul class="sub-menu text-left">
                                                <li><a href="blog-grid.html">blog grid</a></li>
                                                <li><a href="blog-grid-sidebar.html">blog grid sidebar</a></li>
                                                <li><a href="blog-standard.html">blog standardr</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul> --}}
                                    </li>
                                    {{-- <li><a href="#">pages</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li> --}}
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="/">
                    <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>Shop No. 22, Vaibhav Laxmi Complex, WHC Road, Laxmi Nagar Square, Nagpur, Maharashtra - 440022
                    </p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p> 9325417204</p>
                    <p> 9096019086</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>rangreshacollections@gmail.com</p>
                    {{-- <p>example.mail@hum.com</p> --}}
                </div>
            </div>
            {{-- <div class="instagram">
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p1.jpg')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p2.jpg')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p3.jpg')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p4.jpg')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p5.jpg')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/portfolio/p6.jpg')}}" alt="">
                    </a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div> --}}
        </div>
    </header>
    <!-- header-start -->

    {{ $slot }}
    
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area pt-80 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Company</h3>
                            <div class="footer-text">
                                <p>Shop for elegance and exhibit the style you will adore the outcome!! Happy Shopping
                                </p>
                            </div>
                            <div class="footer-icon">
                                <a href="https://www.facebook.com/RangreshaCollections/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FRangresha_Aroha"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/rangresha/"><i
                                        class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title"> Links</h3>
                            <div class="footer-link">
                                <ul>
                                    {{-- <li><a href="about.html">Shipping Options</a></li> --}}
                                    <li><a href="">My Wishlist</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Return Policy</a></li>
                                    <li><a href="">Shopping FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">SHOP</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="footer-wrapper ml-130 mb-30">
                            <h3 class="footer-title">OUR CONTACT</h3>
                            {{-- <div class="footer-img">
                                    <img src="assets/img/footer/footer.png" alt="">
                                </div> --}}
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.html">Shop No. 22, Vaibhav Laxmi Complex, WHC Road, Laxmi Nagar
                                            Square, Nagpur, Maharashtra - 440022</a></li>
                                    <li>Phone: 9325417204 | 9096019086</li>
                                    <li>Email: rangreshacollections@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25 mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> 2024 <a href="https://phianinfotech.com/">Phian infotech</a>.
                                All Rights Reserved</p>
                        </div>
                    </div>
                    {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link f-right">
                            <ul>
                                <li><a href="/">Home </a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="{{ route('productcategory') }}">Categories</a></li>
                                <li><a href="{{ route('blog') }}">Blog </a></li>
                                <li><a href="{{ route('contact') }}">Contact </a></li>

                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
<style>
.footer-fix-nav {
  background-color: ;
  display:none;
}
@media (max-width: 768px) {
  .footer-fix-nav {
    display: block;
  }
}
.footer-fix-nav {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 90;
  right: 0;
  /* display: none; */
  background: #faecdf;
  text-align: center;
  /* font-size: 28px; */
}
.footer-fix-nav a i {
  font-size: 21px;
  padding: 20px 7px;
  display: block;
  color: #9b9b9b;
  font-weight: 500;
}

.footer-fix-nav span.cart-count {
  /* background: #ff253a;
  background: -moz-linear-gradient(-45deg, #ff253a 0%, #ff8453 100%);
  background: -webkit-linear-gradient(-45deg, #ff253a 0%,#ff8453 100%); */
  background: linear-gradient(135deg, #ff253a 0%,#ff8453 100%);
  /* filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff253a', endColorstr='#ff8453',GradientType=1 ); */
  border-radius: 50px;
  font-size: 10px;
  font-weight: 500;
  height: 18px;
  right: 21px;
  line-height: 17px;
  min-width: 18px;
  position: absolute;
  top: 17px;
  color: #fff;
.shadow {
  box-shadow: 0 .5rem 1rem rgba(51,51,51,.15) !important;
}

</style>
    <div class="footer-fix-nav shadow">
        <div class="row mx-0">
            <div class="col">
                <a href="/"><i class="fal fa-home"></i></a>
            </div>
            <div class="col">
                <a href="{{ route('shop')}}"><i class="fal fa-th-large"></i></a>
            </div>
            <div class="col">
                {{-- <a href="{{ route('cart')}}"><i class="fal fa-shopping-cart"></i>
                    <span class="cart-count"> 1 </span>
                </a> --}}
                @if (Cart::instance('cart')->count() > 0)
                <a href="{{ route('cart')}}"><i class="fal fa-shopping-cart"></i>
                      <span class="cart-count"> {{ Cart::instance('cart')->count() }}</span>
                </a>
                @else
                <a href="{{ route('cart')}}"><i class="fal fa-shopping-cart"></i></a>
                @endif
            </div>
            <div class="col">
                <a href="{{ route('login')}}"><i class="fal fa-user-circle"></i></a>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
{{-- <script>

function addToWishlist(product_id,product_name,product_price){
    $.ajax({
        type:'POST',
        url:"{{ route('wishlist')}}",
        data:{
            "_token":"{{ csrf_token()}}",
            product_id:product_id,
            product_name:product_name,
            product_price:product_price
        }
    })
}
</script> --}}
</html>
