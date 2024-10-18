<main>

    <!-- breadcrumb-area-start -->
    {{-- <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>cart</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb-area-end -->

<!-- Cart Area Strat-->
<section class="cart-area pt-100 pb-100">
        <div class="container">
        @if(Session::has('success_message'))
			<div class="alert alert-success">
				<strong>Success</strong> {{Session::get('success_message')}}
			</div>
		@endif
            <div class="row">
                <div class="col-12">
                <form action="#">
                    @if(Cart::instance('cart')->count() > 0)
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
                                @foreach (Cart::instance('cart')->content() as $item)  
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ ('assets/images/product') }}/{{$item->model->image}}"
                                                alt=""></a></td>
                                    <td class="product-name"><a href="#">{{$item->model->name}}</a></td>
                                    <td class="product-price"><span class="amount">{{$item->model->price}}</span></td>
                                    {{-- <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td> --}}
                                    
                                    <style>
                                        .cart-qty {
                                                display: inline-block;
                                                position: relative;
                                                margin-right: 15px;
                                                }
                                        .cart-qty input{
                                            height: 55px;
                                            width: 165px;
                                            border: 0;
                                            text-align: center;
                                            -moz-appearance: none;
                                            appearance: none;
                                            background: #fff1f0;
                                            border-radius: 30px;
                                            font-weight: 500;
                                            color: #747691;
                                            font-size: 16px;
                                            }

                                            .cart-qty .qty {
                                                position: absolute;
                                                top: 8px;
                                                left: 9px;
                                                font-size: 20px;
                                                color: #c4bedd;
                                                cursor: pointer;
                                                line-height: 1;
                                                width: 40px;
                                                height: 40px;
                                                background: #ffffff;
                                                font-size: 16px;
                                                text-align: center;
                                                line-height: 40px;
                                                font-weight: 500;
                                                border-radius: 50%;
                                                /* border-color: #c4bedd; */
                                                border-style: none;
                                                transition: 0.3s;
                                            }
                                            .cart-qty .inc {
                                                left: auto;
                                                right: 9px;
                                                }
                                        
                                    
                                    </style>
                                    <td class="product-quantity">
                                        <div class="cart-qty">
                                            <input type="text" value="{{ $item->qty }}">
                                            <button class="dec qty" wire:click.prevent="decreaseQuentity('{{ $item->rowId }}')">-</button>
                                            <button class="inc qty" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</button>
                                        </div>
                                    </td>
                                                    
                                    <td class="product-subtotal"><span class="amount">{{$item->subtotal }}</span></td>
                                    <td class="product-remove"><a href="#"  wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="fa fa-times"></i></a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>No item in cart</p>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                @if (Session::has('coupon_message'))
                        <div class="alert alert-danger" role="danger" style="color: black">
                            {{ Session::get('coupon_message') }}</div>
                    @endif
                    @if (Session::has('success_messages'))
                        <div class="alert alert-success" role="success" style="color: black">
                            {{ Session::get('success_messages') }}</div>
                    @endif
                                <form action="" wire:submit.prevent='applyCouponCode'>
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" wire:model='couponCode'
                                        placeholder="Coupon code" type="text">
                                    <button class="c-btn theme-btn-2" name="apply_coupon" type="submit">Apply
                                        coupon</button>
                                </div>
                                </form>
                                {{-- <div class="coupon2">
                                    <input class="c-btn theme-btn" name="update_cart" value="Update cart" type="submit">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul class="mb-20">
                                    @if (Session::has('coupon'))
                                    <li>Subtotal <span>₹ {{ Cart::subtotal() }}</span></li>
                                    <li>Coupon Discount ({{ Session::get('coupon')['code'] }})<span>₹ {{ -$discount }}</span></li>
                                    <li>Total <span>₹{{ $subtotalAfterDiscount }}</span></li>
                                    @else

                                    <li>Total <span>₹ {{ Cart::subtotal() }}</span></li>
                                    @endif
                                </ul>
                                <a class="c-btn theme-btn" href="{{ route('checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
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