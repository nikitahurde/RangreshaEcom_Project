<main>

    <!-- hero-area start -->
    <section class="hero-area d-none d-lg-block">
        <div class="hero-slider">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="{{ asset('assets/img/slider/01.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="hero-text mt-90">
                                    <div class="hero-slider-caption ">
                                        <span data-animation="fadeInUp" data-delay=".2s">Fashion</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Big Bag Sale</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Find the trendy bags start from 200rp</p>
                                    </div>
                                    <div class="hero-slider-btn">
                                        <a data-animation="fadeInUp" data-delay=".8s" href="contact.html"
                                            class="c-btn">shop now <i class="far fa-plus"></i></a>
                                            <div class="b-button" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                                                <a href="contact.html" >hot collection <i class="far fa-plus"></i></a>
                                             </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="slider-img d-none d-lg-block" data-animation="fadeInRight" data-delay=".8s">
                                    <img src="{{asset('assets/img/slider/005.jpeg')}}" alt="" width="628" height="550">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->
    <section class="hero-area">
        <div class="hero-slider">
            <div class="slider-active">
                {{-- <div class="single-slider slider-height d-flex align-items-center"
                    data-background="{{ asset('assets/img/slider/01.jpg')}}"> --}}
                    <div class="container">
                        {{-- <div class="row"> --}}
                            {{-- <div class="col-xl-5 col-lg-6">
                                <div class="hero-text mt-90">
                                    <div class="hero-slider-caption ">
                                        <span data-animation="fadeInUp" data-delay=".2s">Fashion</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Big Bag Sale</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Find the trendy bags start from 200rp</p>
                                    </div>
                                    <div class="hero-slider-btn">
                                        <a data-animation="fadeInUp" data-delay=".8s" href="contact.html"
                                            class="c-btn">shop now <i class="far fa-plus"></i></a>
                                            <div class="b-button" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                                                <a href="contact.html" >hot collection <i class="far fa-plus"></i></a>
                                             </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-7 col-lg-6"> --}}
                                <div class="slider-img" data-animation="fadeInRight" data-delay=".8s">
                                    <img src="{{asset('assets/img/slider/008.jpg')}}" alt="" width="100%" height="100%">
                                </div>
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <style>
        @media (min-width: 992px) {
            .hero-area {
                display: none;
            }
        }
    </style>
    
    <!-- banner-area-start -->
    <div class="banner-area banner-pb pt-30 pb-70 pl-55 pr-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <div class="section-title mb-25">
                        <h2> Product Category</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
                @foreach($category as $categorys)
                <div class="col-xl-3 col-lg-3" >
                    <div class="banner-wrapper mb-30" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="banner-img pos-rel">
                            <a href="{{ route('user.category', ['category_slug' => $categorys->slug]) }}">
                                <img src="{{ asset('assets/images/category') }}/{{ $categorys->image }}"
                                alt="{{ $categorys->name }}" width="373" height="230"></a>
                            <div class="banner-text">
                                {{-- <span>{{$categorys->category_name}}</span> --}}
                                <div class="b-button red-b-button">
                                    {{-- <a href="contact.html">shop now <i class="far fa-plus"></i></a> --}}
                                </div>
                            </div>  
                            <h4 class="mt-2" style="text-align: center">{{$categorys->category_name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="col-xl-6 col-lg-6">
                    <div class="banner-wrapper mb-30">
                        <div class="banner-img pos-rel">
                            <a href="product-details.html"><img src="{{asset('assets/img/banner/04.jpg')}}" alt=""></a>
                            <div class="banner-text">
                                <span>Lab Surgery</span>
                                <h2>N95 Face Mask</h2>
                                <div class="b-button red-b-button">
                                    <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-6 col-lg-6">
                    <div class="banner-wrapper mb-30">
                        <div class="banner-img pos-rel">
                            <a href="product-details.html"><img src="{{asset('assets/img/banner/05.jpg')}}" alt=""></a>
                            <div class="banner-text">
                                <span>Surgery Lab</span>
                                <h2>Hand Gloves</h2>
                                <div class="b-button red-b-button">
                                    <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- banner-area-end -->

    <!-- product-area-start -->
    <div class="product-area pb-50">
        <div class="container">
            <div class="tab-border mb-60">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="section-title mb-25">
                            <h2>Features Products</h2>
                            {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="product-tab mb-25">
                            <ul class="nav justify-content-start justify-content-lg-end product-nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                        <i class="far fa-shield-check"></i> Best Seller
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="far fa-star"></i>  Top Rated
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" wire:click="showPopular">
                                    <i class="far fa-star"></i> Popular
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 cl-lg-4 col-md-4" >
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="{{ route('view-product', ['slug' => $product->slug]) }}">
                                            <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="" width="270" height="276">
                                            {{-- <img class="secondary-img" src="{{asset('assets/img/products/02.jpg')}}" alt=""> --}}
                                        </a>
                                        
                                        @php
                                        $witems = Cart::instance('wishlist')->content()->pluck('id');
                                        @endphp


                                        <div class="product-action">
                                            @if ($witems->contains($product->id))
                                                <a href="#" class="action-btn"
                                                    wire:click.prevent="removeFromWishlist({{ $product->id }})">
                                                    <i class="far fa-heart" style='color: red'></i></a>
                                            @else
                                                <a href="#" class="action-btn"
                                                    wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}','{{ $product->price }}')">
                                                    <i class="far fa-heart"></i></a>
                                            @endif
                                            {{-- <a class="action-btn" href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->price}})"><i class="far fa-heart"></i></a> --}}
                                            <a class="action-btn" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})"> <i class="far fa-cart-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>accessories</h5>
                                        <h4><a href="{{ route('view-product', ['slug' => $product->slug]) }}">
                                            {{$product->name}}</a></h4>
                                        <span>{{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/01.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/02.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>accessories</h5>
                                        <h4><a href="product-details.html">Medical Microscope</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/03.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/04.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>home accessories</h5>
                                        <h4><a href="product-details.html">Medical Thermometer</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/02.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/03.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>hand sanitizer</h5>
                                        <h4><a href="product-details.html">Hand Sanitizer Covid -19</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/04.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/05.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>accessories</h5>
                                        <h4><a href="product-details.html">Lab N95 Face Mask</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/05.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/06.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>hand gloves</h5>
                                        <h4><a href="product-details.html">Covid -19 Hand Gloves</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="product-details.html">
                                            <img src="{{asset('assets/img/products/06.jpg')}}" alt="">
                                            <img class="secondary-img" src="{{asset('assets/img/products/01.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>medical equipment</h5>
                                        <h4><a href="product-details.html">New Temperature Gun</a></h4>
                                        <span>$250.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        
                        <div class="row">
                            @foreach($popularproducts as $product)
                            @if($product->popular_pro >0)
                            <div class="col-xl-4 cl-lg-4 col-md-4" >
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="{{ route('view-product', ['slug' => $product->slug]) }}">
                                            <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="" width="270" height="276">
                                        </a>
                                        <div class="product-action">
                                            @if ($witems->contains($product->id))
                                                <a href="#" class="action-btn"
                                                    wire:click.prevent="removeFromWishlist({{ $product->id }})">
                                                    <i class="far fa-heart" style='color: red'></i></a>
                                            @else
                                                <a href="#" class="action-btn"
                                                    wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}','{{ $product->price }}')">
                                                    <i class="far fa-heart"></i></a>
                                            @endif
                                            <a class="action-btn" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})"> <i class="far fa-cart-plus"></i></a>
                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <h5>accessories</h5>
                                        <h4><a href="{{ route('view-product', ['slug' => $product->slug]) }}">
                                            {{$product->name}}</a></h4>
                                        <span>{{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- product-area-end -->

    <style>

        .countdown-unit::before{
          position: absolute;
          content: "";
          font-family: "Font Awesome 5 Pro";
          top: 50%;
          color: #003242;
          font-size: 24px;
          font-weight: 300;
          right: -37px;
          transform: translateY(-50%);
        }
        
        .countdown-unit{
          color: #333333;
          display: inline-block;
          font-size: 40px;
          line-height: 0.8;
          font-weight: 600;
          margin-right: 60px;
          text-align: center;
          border: 2px solid #eaeaea;
          height: 90px;
          width: 70px;
          padding-top: 14px;
          border-radius: 10px;
          position: relative;
        }
        .countdown-units{
          color: #333333;
          display: inline-block;
          font-size: 40px;
          line-height: 0.8;
          font-weight: 600;
          margin-right: 60px;
          text-align: center;
          border: 2px solid #eaeaea;
          height: 90px;
          width: 70px;
          padding-top: 14px;
          border-radius: 10px;
          position: relative;
        }
        @media (max-width: 768px) {
        .countdown-unit,
        .countdown-units {
            margin-right: 10px; /* Further reduce margin for smaller screens */
            font-size: 20px;
            line-height: 0.8;
            font-weight: 00;
            height:60px;
        }
        .countdown-unit::before {
            display: none;
        }
    }
    </style>

    <!-- deal-area-start -->
    @if ($sproducts->count() > 0)
    @if (now() < $sale->sale_date)
    <div class="deal-area pb-50 pt-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>Deal Of This Week</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3" id="countdown">
                    <div class="deal-wrapper text-center">
                        <div class="countdown-unit">
                            <span id="days" ></span><p> Days</p>
                        </div>
                        {{-- <div class="colon">:</div> --}}
                        <div class="countdown-unit">
                            <span id="hours"></span><p> Hr</p>
                        </div>
                        {{-- <div class="colon">:</div> --}}
                        <div class="countdown-unit">
                            <span id="minutes"></span><p> Min</p>
                        </div>
                        {{-- <div class="colon">:</div> --}}
                        <div class="countdown-units">
                            <span id="seconds"></span><p>Sec</p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="row">
                <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3" id="countdown">
                    <div class="deal-wrapper text-center">
                        <div class="deal-count">
                            <div class="deal-time" data-countdown="2020/9/01"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
    <!-- deal-area-end -->

    <!-- banner-area-start -->
    <div class="banner-02-area pb-70 pl-165 pr-165">
        <div class="container-fluid">
            <div class="row">
                @foreach ($sproducts as $product)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner-02-wrapper text-center mb-30" data-bg-color="#fdf4e3">
                        <div class="banner-02-text">
                            <span>{{$product->category->category_name}}</span>
                            <h2>{{$product->name}}</h2>
                        </div>
                        <div class="banner-02-img pos-rel">
                            <a wire:navigate
                            href="{{ route('view-product', ['slug' => $product->slug]) }}"><img src="{{asset('assets/images/product')}}/{{$product->image}}" alt=""></a>
                             <span class="banner-tag">hot</span>
                        </div>
                        <div class="banner-price">
                            <span class="old-price">{{$product->price}}</span>
                            <span class="new-price">{{$product->sale_price}}</span>
                        </div>
                        <div class="banner-button">
                            <a class="c-btn" href="" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})">buy now <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f8f8f8">
                        <div class="banner-02-text">
                            <span>Digital Meter</span>
                            <h2>Blood Pressure Meter</h2>
                        </div>
                        <div class="banner-02-img pos-rel">
                            <a href="#"><img src="{{asset('assets/img/banner/b-02.png')}}" alt=""></a>
                             <span class="banner-tag">hot</span>
                        </div>
                        <div class="banner-price">
                            <span class="old-price">$250.99</span>
                            <span class="new-price">$239.99</span>
                        </div>
                        <div class="banner-button">
                            <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f3f8ff">
                        <div class="banner-02-text">
                            <span>Digital Meter</span>
                            <h2>Blood Pressure Meter</h2>
                        </div>
                        <div class="banner-02-img pos-rel">
                            <a href="#"><img src="{{asset('assets/img/banner/b-03.png')}}" alt=""></a>
                             <span class="banner-tag">hot</span>
                        </div>
                        <div class="banner-price">
                            <span class="old-price">$250.99</span>
                            <span class="new-price">$239.99</span>
                        </div>
                        <div class="banner-button">
                            <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    @endif
    @endif
    <!-- banner-area-end -->

    <!-- product-area-start -->
    <div class="product-area pb-70">
        <div class="container">
            <div class="row mb-30">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="section-title mb-30">
                        <h2>Features Products</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="b-button shop-btn s-btn text-md-right mb-30">
                        <a href="{{ route('shop')}}">view all product <i class="fal fa-long-arrow-right"></i></a>
                     </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-4 cl-lg-4 col-md-4" >
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="{{ route('view-product', ['slug' => $product->slug]) }}">
                                <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="">
                            </a>
                            <div class="product-action">
                                @if ($witems->contains($product->id))
                                <a href="#" class="action-btn"
                                    wire:click.prevent="removeFromWishlist({{ $product->id }})">
                                    <i class="far fa-heart" style='color: red'></i></a>
                            @else
                                <a href="#" class="action-btn"
                                    wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}','{{ $product->price }}')">
                                    <i class="far fa-heart"></i></a>
                            @endif
                                {{-- <a class="action-btn" href="#"><i class="far fa-heart"></i></a> --}}
                                <a class="action-btn" href="" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            {{-- <h5>face mask</h5> --}}
                            <h4><a href="{{ route('view-product', ['slug' => $product->slug]) }}">{{$product->name}}</a></h4>
                            <span>{{$product->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-01.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <span class="product-tag hot-1">Hot</span>
                        <div class="product-text">
                            <h5>sanitizer</h5>
                            <h4><a href="product-details.html">Hand Sanitizer</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-02.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>home accessories</h5>
                            <h4><a href="product-details.html">Inhaler Pressure Drop</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-03.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <span class="product-tag hot-2">new</span>
                        <div class="product-text">
                            <h5>medical meter</h5>
                            <h4><a href="product-details.html">Temperature Gun</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-04.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <span class="product-tag hot-2">new</span>
                        <div class="product-text">
                            <h5>hand gloves</h5>
                            <h4><a href="product-details.html">Lab Hand Gloves</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-05.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <span class="product-tag hot-1">new</span>
                        <div class="product-text">
                            <h5>medical meter</h5>
                            <h4><a href="product-details.html">Digital Thermometer</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-06.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>hand sanitizer</h5>
                            <h4><a href="product-details.html">hand sanitizer</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/products/p-07.png')}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <span class="product-tag hot-3">-30%</span>
                        <div class="product-text">
                            <h5>personal</h5>
                            <h4><a href="product-details.html">Health Medicine</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- product-area-end -->

    <!-- testimonial-area-start -->
    <div class="testimonial-area pt-100 pb-175" data-background="{{asset('assets/img/bg/test.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>What Our Client’s Say</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
            </div>
            <div class="row test-active">
                <div class="col-xl-6">
                    <div class="testimonial-wrapper" "height = 10">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="{{ asset('assets/img/testimonial/t1.png') }}" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>So beautiful, with good quality products</p>
                            <h4>Milka Dhorey</h4>
                            <span>Nagpur</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper""height=10">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="{{ asset('assets/img/testimonial/t2.png') }}" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Variety of Traditional and Handcrafted Gifting options for everyone, every occasions and for festivals, weddings. Your purchase will help rural women who are making these items.</p>
                            <h4>Nishant Barde</h4>
                            <span>Pune</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper""height=10">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="{{ asset('assets/img/testimonial/t3.png') }}" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Handmade and eco friendly products.</p>
                            <h4>Aditi Telang</h4>
                            <span>Mumbai</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper""height=10">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="{{ asset('assets/img/testimonial/t4.png') }}" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Nice</p>
                            <h4>Gaurav mishra</h4>
                            <span>Nagpur</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <!-- blog-area-start -->
    <div class="blog-area pt-105 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>Latest News & Blog</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="{{asset('assets/img/blogs/laptop-bag.jpg')}}" width="370" height="240" alt=""></a>
                            <span class="blog-tag color-1">Fashion</span>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="">Why are Vivienne Westwood bags so popular?</a></h4>
                            <p>We take a look at the iconic designer and how Vivienne Westwood bags have become so popular, covering her life </p>
                            <div class="b-button gray-b-button">
                                <a href="">read more <i class="far fa-plus"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="{{asset('assets/img/blogs/blog2.jpg')}}" alt="" width="370" height="240"></a>
                            <span class="blog-tag color-2">Fashion</span>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="blog-details.html">Top 10 Mini Bags To Add To Your Collection</a></h4>
                            <p>Treat yourself to some staple mini bags to add to your growing collection. Discover our top ten favourite styles this season. </p>
                            <div class="b-button gray-b-button">
                                <a href="">read more <i class="far fa-plus"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="{{asset('assets/img/blogs/conferancebag.jpg')}}" alt=""  width="370" height="240"></a>
                            <span class="blog-tag color-1">Fashion</span>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="">Best Holiday Bags & Accessories</a></h4>
                            <p>Discover the essential holiday bags and accessories to elevate your holiday style. From raffia bags to statement sunglasses, explore must-have styles. </p>
                            <div class="b-button gray-b-button">
                                <a href="">read more <i class="far fa-plus"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area-end -->

    <!-- brand-area-start -->
    {{-- <div class="brand-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/01.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/02.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/03.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/04.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/05.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/06.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/07.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/08.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/09.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/10.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/11.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="{{asset('assets/img/brand/12.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- brand-area-end -->

    <!-- features-area-start -->
    <div class="features-area pt-60 pb-30 grey-2-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="features-wrapper mb-30">
                        <div class="features-icon fe-1 f-left">
                            <i class="fal fa-ship"></i>
                        </div>
                        <div class="features-text">
                            <h3>Free Shipping</h3>
                            <p>Sed perspicia unde omnis iste
                            nat error voluptate accus</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="features-wrapper mb-30">
                        <div class="features-icon fe-2 f-left">
                             <i class="fal fa-usd-circle"></i>
                        </div>
                        <div class="features-text">
                            <h3>Money Back</h3>
                            <p>Sed perspicia unde omnis iste
                            nat error voluptate accus</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="features-wrapper mb-30">
                        <div class="features-icon fe-3 f-left">
                            <i class="fal fa-unlock-alt"></i>
                        </div>
                        <div class="features-text">
                            <h3>100% Secure</h3>
                            <p>Sed perspicia unde omnis iste
                            nat error voluptate accus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-area-end -->

    <!-- instagram-area-start -->
    <div class="instagram-area pl-130 pr-130">
        <div class="container-fluid">
            <div class="row instagram-active">
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C3cMel7vVCK/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i01.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C3cMY_QPQ9e/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i02.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C3sRL2uCkg5/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i03.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C4LNohtvEN-/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i04.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C3sUd5Sv66P/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i07.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C4LNk6rv5iH/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i06.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="https://www.instagram.com/p/C4LNmtuvROT/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img src="assets/img/instagram/i05.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- instagram-area-end -->

</main>
<script>
  const countdownEndTime = new Date("{{ $sale->sale_date }}").getTime();

const countdown = setInterval(function() {
    const now = new Date().getTime();
    const distance = countdownEndTime - now;

    if (distance <= 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = 'Countdown expired!';
        console.log('Countdown expired!');

        const dealSection = document.querySelector('.deal-section');
        console.log('Deal Section:', dealSection);

        if (dealSection) {
            dealSection.style.display = 'none';
            console.log('Deal section hidden.');
        }
    } else {
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update the countdown elements
        document.getElementById('days').innerHTML = days.toString().padStart(2, '0');
        document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
        document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');
    }
}, 1000);

</script>
