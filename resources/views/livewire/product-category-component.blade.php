<main>

    <!-- breadcrumb-area-start -->
    {{-- <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>Shop Full</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>shop</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb-area-end -->

    <!-- shop-full-area-start -->
    <div class="shhop-full-area pt-100 pb-100 pr-60 pl-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 custom-col-2">
                    <div class="category-sidebar cat-side mb-30">
                        <h3 class="cat-title">Category</h3>
                        <div class="category-item">
                            <ul>
                                @foreach($categorys as $category)
                                <li><a href="{{ route('user.category', ['category_slug' => $category->slug]) }}">{{$category->category_name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="category-sidebar cat-side mb-30">
                        <h3 class="cat-title">Category</h3>
                        <div class="product-11-wrapper text-center">
                            <div class="product-02-img pos-rel">
                                <a href="#">
                                    <img src="assets/img/products/c-1.png" alt="">
                                </a>
                                <div class="b-02-tag b-03-tag">
                                    <h3>-20% <br> <span>off</span> </h3>
                                </div>
                            </div>
                            <div class="product-text">
                                <h4><a href="#">Lab N95 Facemask</a></h4>
                                <span>$250.99</span>
                                <div class="c-side-button mt-20">
                                    <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-sidebar cat-side mb-30">
                        <h3 class="cat-title">Filter By Color</h3>
                        <div class="cat-widget">
                            <div class="cat-widget-color">
                                <span class="c-1"></span>
                                <span class="c-2"></span>
                                <span class="c-3"></span>
                                <span class="c-4"></span>
                                <span class="c-5"></span>
                                <span class="c-6"></span>
                                <span class="c-7"></span>
                                <span class="c-8"></span>
                                <span class="c-9"></span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="pro-ful-tab">
                        <div class="row mb-20">
                            <div class="col-xl-4 col-lg-3 col-md-3">
                                <div class="product-02-tab mb-20">
                                    <ul class="nav justify-content-start product-nav" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                                aria-controls="home" aria-selected="true">
                                                <i class="fas fa-th-large"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                                aria-controls="profile" aria-selected="false">
                                                <i class="fas fa-bars"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-xl-4 col-lg-5 col-md-5">
                                <div class="pro-tab1-content pt-15 mb-20 text-md-center">
                                    <h4>Showing 20 Results Of 50 Products</h4>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="pro-filter mb-20 f-right">
                                    <form action="#">
                                        <select name="pro-filter" id="pro-filter">
                                            <option value="1">Default Type </option>
                                            <option value="2">Top Sales </option>
                                            <option value="3">New Product </option>
                                            <option value="4">A to Z Product </option>
                                        </select>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                        <div class="product-tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        @foreach($categoryProduct as $item)    
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1">Hot</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="{{ route('view-product', ['slug' => $item->slug]) }}">
                                                        <img src="{{ asset('assets/images/product') }}/{{ $item->image }}" alt="">
                                                    </a>
                                                    @php
                                                    $witems = Cart::instance('wishlist')->content()->pluck('id');
                                                    @endphp
                                                    
                                                    <div class="product-action">
                                                        @if ($witems->contains($item->id))
                                                        <a href="#" class="action-btn"
                                                            wire:click.prevent="removeFromWishlist({{ $item->id }})">
                                                            <i class="far fa-heart" style='color: red'></i></a>
                                                        @else
                                                        <a href="#" class="action-btn"
                                                            wire:click.prevent="addToWishlist({{ $item->id }},'{{ $item->name }}','{{ $item->price }}')">
                                                            <i class="far fa-heart"></i></a>
                                                        @endif
                                                        {{-- <a class="action-btn" href="#"><i class="far fa-heart"></i></a> --}}
                                                        <a class="action-btn" href="wire:click.prevent="store({{$item->id}},'{{$item->name}}',{{$item->price}})""><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    {{-- <h5>disable chair</h5> --}}
                                                    <h4><a href="/">{{$item->name}}</a></h4>
                                                    <span>{{$item->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-02.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>personal</h5>
                                                    <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-03.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>hand gloves</h5>
                                                    <h4><a href="product-details.html">WLab Hand Gloves</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1 hot-2">new</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-04.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>medical meter</h5>
                                                    <h4><a href="product-details.html">Health & Medicine</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-05.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>surgery mask</h5>
                                                    <h4><a href="product-details.html">Lab N98 Face Mask</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1">hot</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-06.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>sanitizer</h5>
                                                    <h4><a href="product-details.html">Hand Sanitizer</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-07.png" alt="">
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
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1 hot-2">new</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-08.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>medical meter</h5>
                                                    <h4><a href="product-details.html">Temperature Gun</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-09.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>disable chair</h5>
                                                    <h4><a href="product-details.html">Wheelchair-Disabled</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1">hot</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-10.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>personal</h5>
                                                    <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-02.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>hand gloves</h5>
                                                    <h4><a href="product-details.html">Lab Hand Gloves</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1 hot-2">new</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-06.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>medical meter</h5>
                                                    <h4><a href="product-details.html">Health & Medicine</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1 hot-2">new</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-13.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>medical meter</h5>
                                                    <h4><a href="product-details.html">Temperature Gun</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-14.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>disable chair</h5>
                                                    <h4><a href="product-details.html">Wheelchair-Disabled</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="badge-tag">
                                                    <span class="product-tag pro-tag hot-1">hot</span>
                                                </div>
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-15.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>personal</h5>
                                                    <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 cl-lg-3 col-md-6">
                                            <div class="product-03-wrapper grey-2-bg pos-rel text-center mb-30">
                                                <div class="product-02-img pos-rel">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/f-04.png" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <h5>medical meter</h5>
                                                    <h4><a href="product-details.html">Health & Medicine</a></h4>
                                                    <span>$250.99</span>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach($categoryProduct as $item) 
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="product mb-30">
                                                <div class="product-img">
                                                    <a href="{{ route('view-product', ['slug' => $item->slug]) }}">
                                                        <img src="{{ asset('assets/images/product') }}/{{ $item->image }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-8">
                                            <div class="product-list-content mb-30">
                                                <div class="product-text">
                                                    {{-- <h5>hand sanitizer</h5> --}}
                                                    <h4><a href="product-details.html">{{$item->name}}</a></h4>
                                                    <span>{{$item->price}}</span>
                                                </div>
                                                <p>{{$item->short_description}}</p>
                                                <div class="product-action product-02-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="wire:click.prevent="store({{$item->id}},'{{$item->name}}',{{$item->price}})"">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="basic-pagination mt-20 basic-pagination-2 text-center">
                                    <ul>
                                        <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- shop-full-area-area -->

    <!-- brand-area-start -->
    <div class="brand-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/01.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/02.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/03.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/04.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/05.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/06.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/07.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/08.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/09.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/10.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/11.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                    <div class="single-brand mb-60">
                        <img src="assets/img/brand/12.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

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
