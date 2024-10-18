<main>

    <!-- breadcrumb-area-start -->
    {{-- <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>Wishlist</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb-area-end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pt-100 pb-100">
        @if (Session::has('success_message'))
            <div class="alert alert-success">
                <strong>Success</strong> {{ Session::get('success_message') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        @if (Cart::instance('wishlist')->count() > 0)
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('wishlist')->content() as $item)
                                            <tr>
                                                <td class="product-thumbnail"><a wire:navigate href="{{ route('view-product', ['slug' => $item->model->slug]) }}"><img
                                                            src="{{ 'assets/images/product' }}/{{ $item->model->image }}"
                                                            alt=""></a></td>
                                                <td class="product-name"><a href="">{{ $item->model->name }}</a>
                                                </td>
                                                <td class="product-price"><span
                                                        class="amount">{{ $item->model->price }}</span></td>
                                                {{-- <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td> --}}

                                                
                                                <td class="product-quantity">
                                                    <div class="cart-qty">
                                                        <a class="c-btn" href="" wire:click.prevent="moveProductFormWishlistToCart('{{ $item->rowId }}')">Move to cart</a>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal"><span
                                                        class="amount">{{ $item->subtotal }}</span></td>
                                                <td class="product-remove"><a href="#"
                                                    wire:click.prevent="removeFormWishlist('{{ $item->model->id }}')"><i
                                                            class="fa fa-times"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>No item in cart</p>
                        @endif
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->


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
