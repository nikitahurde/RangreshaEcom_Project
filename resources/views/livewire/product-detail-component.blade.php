<main>

    <!-- breadcrumb-area-start -->
    {{-- <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>product details</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>product details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb-area-end -->

    <!-- shop-banner-area start -->
    <section class="shop-banner-area pt-100 pb-70">
        <div class="container">
            @foreach($products as $product)
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    {{-- <div class="shop-thumb-tab">
                        <ul class="nav" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-selected="true"><img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="6"> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-selected="false"><img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="5"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab"
                                    aria-selected="false"><img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="4"></a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="product-details-img mb-30">
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="3">
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="profile" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="2">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile1" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="1">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product-details-wrapper mb-30">
                        <div class="product-text">
                            {{-- <h5>{{$product->category->category_name}}</h5> --}}
                            <h4>{{$product->name}}</h4>
                            <div class="pro-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fad fa-star-half-alt"></i>
                                <span>(05 Reviews)</span>
                            </div>
                            @if (now() < $sale->sale_date)
                                @if ($product->sale_price > 0)
                                <span>{{$product->sale_price}}</span>
                                @else
                                <span>{{$product->price}}</span>
                                @endif
                            @else
                            <span>{{$product->price}}</span>
                            @endif

                        </div>
                        <div class="product-variant">
                            <div class="product-desc">
                                <p>{{$product->short_description}}</p>
                            </div>
                            {{-- <div class="product-info-list">
                                <span>Size</span>
                                <a href="#">l</a>
                                <a href="#">m</a>
                                <a href="#">s</a>
                                <a href="#">x1</a>
                            </div>
                            <div class="product2-info-list">
                                <span>color</span>
                                <a class="p--1" href="#"></a>
                                <a class="p--2" href="#"></a>
                                <a class="p--3" href="#"></a>
                                <a class="p--4" href="#"></a>
                            </div> --}}
                            <span class="stock">{{$product->stock}} In Stock</span>
                            <div class="product-action-details ">
                                <div class="product-details-action">
                                    <form action="#">
                                        <div class="plus-minus">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="1">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                        <div class="details-cart-btn">
                                            <button class="c-btn red-btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})">add to cart <i class="far fa-plus"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp

                            <div class="pro-details-icon">
                                @if ($witems->contains($product->id))
                                <a href="#" 
                                    wire:click.prevent="removeFromWishlist({{ $product->id }})">
                                    <i class="far fa-heart" style='color: red'></i></a>
                            @else
                                <a href="#" 
                                    wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}','{{ $product->price }}')">
                                    <i class="far fa-heart"></i></a>
                            @endif
                                {{-- <a href="#"><i class="far fa-heart"></i></a> --}}
                                <a href="#"><i class="far fa-search"></i></a>
                                <a href="#"><i class="far fa-exchange"></i></a>
                            </div>
                            <div class="product-02-list">
                                <ul>
                                    <li>
                                        <div class="pro-02-list-info f-left">
                                            <span>Categories :</span>
                                        </div>
                                        <div class="pro-02-list-text">
                                            <span>{{$product->category->category_name}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pro-02-list-info f-left">
                                            <span>SKU :</span>
                                        </div>
                                        <div class="pro-02-list-text">
                                            <span>{{$product->sku}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pro-02-list-info f-left">
                                            <span class="pro11">Share Now :</span>
                                        </div>
                                        <div class="pro-02-list-icon">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- shop-banner-area end -->

    <!-- product-desc-area start -->
    <section class="product-desc-area pb-60">
        <div class="container">
            @foreach($products as $product)
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-30">
                    <div class="bakix-details-tab">
                        <ul class="nav text-center pb-30 mb-50" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#id-desc" role="tab"
                                    aria-controls="home" aria-selected="true">Description </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add" role="tab"
                                    aria-controls="profile" aria-selected="false">Additional Information</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="event-text">
                                        
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                            <div class="additional-info">
                                <div class="table-responsive">
                                    <h4>Additional information</h4>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td class="product_weight">1.4 oz</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td class="product_dimensions">62 × 56 × 12 in</td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td class="product_dimensions">XL, XXL, LG, SM, MD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="product-desc-imgmb-30">
                        <img src="assets/img/products/pr-banner.png" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- product-desc-area end -->

    <!-- product-area-start -->
    <div class="product-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>Features Products</h2>
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error</p> --}}
                    </div>
                </div>
            </div>
            <div class="row pro-active">
                @foreach($related_products as $item)
                    
                <div class="col-xl-4">
                    <div class="product-wrapper text-center">
                        <div class="product-img pos-rel">
                            <a href="{{ route('view-product',['slug'=>$item->slug]) }}">
                                <img src="{{asset('assets/images/product')}}/{{$item->image}}" alt="">
                                {{-- <img class="secondary-img" src="assets/img/products/02.jpg" alt=""> --}}
                            </a>

                            <div class="product-action">
                                @if ($witems->contains($item->id))
                                <a href="" class="action-btn"
                                    wire:click.prevent="removeFromWishlist({{ $item->id }})">
                                    <i class="far fa-heart" style='color: red'></i></a>
                            @else
                                <a href="#" class="action-btn"
                                    wire:click.prevent="addToWishlist({{ $item->id }},'{{ $item->name }}','{{ $item->price }}')">
                                    <i class="far fa-heart"></i></a>
                            @endif
                                {{-- <a class="action-btn" href="#"><i class="far fa-heart"></i></a> --}}
                                <a class="c-btn" href="" wire:click.prevent="store({{$item->id}},'{{$item->name}}',{{$item->price}})" >add to cart <i class="far fa-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>{{$item->category->category_name}}</h5>
                            <h4><a href="#">{{$item->name}}</a></h4>
                            <span>{{$item->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4">
                    <div class="product-wrapper text-center">
                        <div class="product-img pos-rel">
                            <a href="#">
                                <img src="assets/img/products/02.jpg" alt="">
                                <img class="secondary-img" src="assets/img/products/03.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>hand sanitizer</h5>
                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product-wrapper text-center">
                        <div class="product-img pos-rel">
                            <a href="#">
                                <img src="assets/img/products/03.jpg" alt="">
                                <img class="secondary-img" src="assets/img/products/04.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>home accessories</h5>
                            <h4><a href="#">Medical Thermometer</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product-wrapper text-center">
                        <div class="product-img pos-rel">
                            <a href="#">
                                <img src="assets/img/products/01.jpg" alt="">
                                <img class="secondary-img" src="assets/img/products/02.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>accessories</h5>
                            <h4><a href="#">Medical Microscope</a></h4>
                            <span>$250.99</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- product-area-end -->

    <!-- instagram-area-start -->
    <div class="instagram-area pl-130 pr-130">
        <div class="container-fluid">
            <div class="row instagram-active">
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/02.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/03.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/04.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/05.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/06.jpg" alt="">
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
                            <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
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