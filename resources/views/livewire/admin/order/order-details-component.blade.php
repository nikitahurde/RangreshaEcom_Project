<div class="main-panel">
    <div class="content-wrapper">
            <div class="container-fluid">
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                </div>
                @endif
               

                <!-- Start::row-1 -->
                <div class="row">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                    </div>
                    @endif
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title">
                                            Order No - <span class="text-primary">#{{ $order->id }}</span>
                                        </div>
                                      
                                        <div>
                                            <span>
                                                Estimated delivery : 30,Nov 2023
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title">
                                            Name - <span class="text-primary">{{ $order->firstname }} {{$order->lastname}}</span>
                                        </div>
                                      
                                        {{-- <div>
                                            <span>
                                                Estimated delivery : 30,Nov 2023
                                            </span>
                                        </div> --}}
                                    </div>
                                    <div class="card-body p-0">
                                        {{-- @foreach ($order as $item) --}}
                                            {{-- {{$order->firstname}} {{$order->lastname}} --}}
                                        {{-- @endforeach --}}
                                        <div class="table-responsive">
                                            <table class="table text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Tracking ID</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->orderItems as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-xxl bg-light">
                                                                        <img src="{{ asset('assets/images/product') }}/{{ $item->product->image }}" alt="{{ $item->product->name }}">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="mb-1 fs-14 fw-medium">
                                                                        <a href="javascript:void(0);">{{ $item->product->product_name }}</a>
                                                                    </div>
                                                                    {{-- <div class="mb-1">
                                                                        <span class="me-1">Name:</span><span class="text-muted">{{ $item->product->product_name }}</span>
                                                                    </div> --}}
                                                                    {{-- <div class="mb-1">
                                                                        <span class="me-1">Size:</span><span class="text-muted">{{ $item->product->packsize->packsize }}</span>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                        <td>
                                                            <span class="fs-15 fw-medium">{{ $item->price }}</span>
                                                        </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>₹ {{ $item->price * $item->quantity }}</td>
                                                    </tr>
                                                    @endforeach
                                                    {{-- <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-xxl bg-light">
                                                                        <img src="../assets/images/ecommerce/jpg/9.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="mb-1 fs-14 fw-medium">
                                                                        <a href="javascript:void(0);">Fashion High-Top Lace-Up Slim Heels Sandals For Women</a>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Size:</span><span class="text-muted">9</span>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Color:</span><span class="text-muted">Light Gray<span class="badge bg-success ms-3">In Offer</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                        <td>
                                                            <span class="fs-15 fw-medium">$499</span>
                                                        </td>
                                                        <td>2</td>
                                                        <td>$998</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-xxl bg-light">
                                                                        <img src="../assets/images/ecommerce/jpg/13.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="mb-1 fs-14 fw-medium">
                                                                        <a href="javascript:void(0);">
                                                                            SPK Step Out 12 L Mini Backpack (Small Size, Yellow, Water Repellant)</a>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Size:</span><span class="text-muted">Small</span>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Color:</span><span class="text-muted">Yellow<span class="badge bg-info ms-3">32% Off</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                        <td>
                                                            <span class="fs-15 fw-medium">$799</span>
                                                        </td>
                                                        <td>1</td>
                                                        <td>$799</td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Total Items :</div>
                                                        </td>
                                                        <td>
                                                             {{ $total}}
                                                        </td>
                                                    </tr>


                                                    @if ($order->discount > 0)
                                                    <tr class="table-order">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Sub Total :</div>
                                                        </td>
                                                        <td>
                                                            ₹{{ $order->subtotal + $order->discount }}
                                                        </td>
                                                    </tr>
                                                    <tr class="table-order">

                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Coupon Discount :</div>
                                                        </td>
                                                        <td>
                                                            -₹{{ $order->discount }}
                                                        </td>
                                                    </tr>
                                                @else
                                                @endif
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Sub Total :</div>
                                                        </td>
                                                        <td>
                                                            ₹ {{ $order->subtotal }}
                                                        </td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Applied Coupon :</div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success-transparent">SPKFIR</span>
                                                        </td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Delivery Fees :</div>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger">00</span>
                                                        </td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Total Saved :</div>
                                                        </td>
                                                        <td>
                                                            <span class="fs-14 fw-medium text-success">$3,799</span>
                                                        </td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="fw-medium">Total Price :</div>
                                                        </td>
                                                        <td>
                                                            <span class="fs-16 fw-medium">₹ {{ $order->subtotal}}</span>
                                                            {{-- <span class="fs-16 fw-medium">₹ {{ $order->subtotal + 70 }}</span> --}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top-0">
                                        <div class="btn-list float-end">
                                            <button class="btn btn-primary btn-wave btn-sm" onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                            <button class="btn btn-secondary btn-wave btn-sm"><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Ship order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Order Tracking
                                </div>
                                <div class="ms-auto text-success">#SPK1218153635</div>
                            </div>
                            <div class="card-body">
                                <div class="order-track">
                                    <div class="accordion" id="basicAccordion">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingOne">
                                                <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true" aria-controls="basicOne">
                                                    <div class="d-flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/ecommerce/png/20.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0 fs-14">Order Placed</p>
                                                            <span class="fs-11 text-success">Nov 03, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicOne" class="accordion-collapse collapse show border-top-0" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                                <div class="accordion-body pt-0 ps-5">
                                                    <div class="fs-11">
                                                        <p class="mb-0">Order placed successfully by <a href="javascript:void(0);" class="font-weight-semibold text-primary">Sansa Taylor</a></p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion1">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicTwo" aria-expanded="true" aria-controls="basicTwo">
                                                    <div class="d-flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/ecommerce/png/19.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0 fs-14">Picked</p>
                                                            <span class="fs-12">Nov 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicTwo" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingTwo" data-bs-parent="#basicAccordion1">
                                                <div class="accordion-body pt-0 ps-5">
                                                    <div class="fs-11">
                                                        <p class="mb-0">Your order has been picked up by <span class="font-weight-semibold">Smart Good Services</span></p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion2">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingThree">
                                                <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicThree" aria-expanded="true" aria-controls="basicThree">
                                                    <div class="d-flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/ecommerce/png/18.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0 fs-14">Shipping</p>
                                                            <span class="fs-12">Nov 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicThree" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingThree" data-bs-parent="#basicAccordion2">
                                                <div class="accordion-body pt-0 ps-5">
                                                    <div class="fs-11 mb-3">
                                                        <p class="mb-0">Arrived USA <span class="font-weight-semibold">SGS Warehouse</span></p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36</span>
                                                    </div>
                                                    <div class="fs-11 mb-3">
                                                        <p class="mb-0">picked up by <span class="font-weight-semibold">SGS Agent</span> and on the way to Hyderabad</p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36</span>
                                                    </div>
                                                    <div class="fs-11">
                                                        <p class="mb-0">Arrived in Hyderabad and expected Delivery is <span class="font-weight-semibold">Apr 16, 2023</span> </p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion3">
                                        <div class="accordion-item border-0 bg-transparent next-step">
                                            <div class="accordion-header" id="headingFour">
                                                <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicFour" aria-expanded="true" aria-controls="basicFour">
                                                    <div class="d-flex mb-2">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary border"><i class="fe fe-package fs-12"></i></span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0 fs-14">Out For Delivery</p>
                                                            <span class="text-muted fs-12">Nov 03, 15:10 (expected)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicFour" class="accordion-collapse collapse border-top-0" aria-labelledby="headingFour" data-bs-parent="#basicAccordion3">
                                                <div class="accordion-body pt-0 ps-5">
                                                    <div class="fs-11">
                                                        <p class="mb-0">Your order is out for devlivery</p>
                                                        <span class="text-muted op-5">Nov 03, 2023, 15:36 (expected)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion4">
                                        <div class="accordion-item border-0 bg-transparent next-step">
                                            <div class="accordion-header" id="headingFive">
                                               <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" aria-expanded="true" >
                                                    <div class="d-flex mb-2">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary border"><i class="fe fe-package fs-12"></i></span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0 fs-14">Delivered</p>
                                                            <span class="fs-12 text-muted">Nov 03, 18:42</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        
        <!-- include footer.html"-->
        <!-- include responsive-search-modal.html"-->

    </div>

    <!-- include commonjs.html"-->

    <!-- include custom_switcherjs.html"-->

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>