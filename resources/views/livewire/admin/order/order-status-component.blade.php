<div class="main">

    <form wire:submit.prevent="fetchData">
        <div class="row my-2 mx-1">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="start_date" class="form-label">From Date</label>
                    <input type="date" class="form-control" wire:model="startDate" id="start_date">
                    @error('startDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="end_date" class="form-label">To Date</label>
                    <input type="date" class="form-control" wire:model="endDate" id="end_date">
                    @error('endDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <button class="btn btn-primary-light btn-wave me-0" type="submit">
                    <input class="form-check-input" type="checkbox" wire:model="export" id="exportCheckbox">
                    <i class="ri-upload-cloud-line align-middle"></i> Export Order
                </button>
                {{-- </div>
            <div class="col-md-2 mt-4"> --}}
                <button class="btn btn-secondary-light btn-wave me-0" type="submit">
                    Get Order
                </button>
            </div>
        </div>
    </form>
    <div class="row">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}
            </div>
        @endif
        
      
    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Order Id</th>
                                    <th> Name </th>
                                    <th> Address </th>
                                    <th> update Status </th>
                                    <th> Status</th>
                                    <th> Total </th>
                                    <th> Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($data)
                                    @foreach ($data as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>
                                            {{-- <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}"
                                            class="me-2" alt="image"> --}}
                                            {{ $order->firstname }}</td>
                                        <td> {{ $order->address }} {{ $order->city }}</td>
                                        {{-- <td>
                                            <label class="badge badge-gradient-success">DONE</label>
                                        </td> --}}
                                        <td class="dropdown">
                                            <select name="delivaryStatus" class="badge dropdown-toggle"
                                                id="" style="color: black;">
                                                <option value="">Select status</option>
                                                <option value="delivered"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'delivered')">
                                                    Delivered
                                                </option>
                                                <option value="canceled"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'canceled')">
                                                    Cancelled
                                                </option>
                                                <option value="confirmed"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'confirmed')">
                                                    Confirmed
                                                </option>
                                                <option value="shipped"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'shipped')">
                                                    Shipped
                                                </option>
                                                <option value="return"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'return')">
                                                    Return
                                                </option>
                                                <option value="on hold"
                                                    wire:click.prevent="updateOrderStatus({{ $order->id }},'on hold')">
                                                    On
                                                    hold
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            @if ($order->status == 'delivered')
                                                <label class="badge badge-gradient-success">Delivered</label>
                                            @elseif($order->status == 'confirmed')
                                                <label class="badge badge-gradient-warning">Confirmed</label>
                                            @elseif($order->status == 'canceled')
                                                <label class="badge badge-gradient-danger">Canceled</label>
                                            @elseif($order->status == 'shipped')
                                                <label class="badge badge-gradient-success">Shipped</label>
                                            @elseif($order->status == 'return')
                                                <label class="badge badge-gradient-success">Return</label>
                                            @elseif($order->status == 'on hold')
                                                <label class="badge badge-gradient-info">hold</label>
                                            @else
                                                <label
                                                    class="badge badge-gradient-warning">{{ $order->status }}</label>
                                            @endif
                                        </td>
                                        <td> {{ $order->subtotal }} </td>
                                        <td> <button wire:click.prevent="notification({{ $order->id }})"
                                                class="btn btn-sm btn-warning-ghost">Order Details</button> </td>
                                    </tr>
                                    @endforeach
                                @else
                                    @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>
                                                {{-- <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}"
                                                class="me-2" alt="image"> --}}
                                                {{ $order->firstname }}</td>
                                            <td> {{ $order->address }} {{ $order->city }}</td>
                                            {{-- <td>
                                                <label class="badge badge-gradient-success">DONE</label>
                                            </td> --}}
                                            <td class="dropdown">
                                                <select name="delivaryStatus" class="badge dropdown-toggle"
                                                    id="" style="color: black;">
                                                    <option value="">Select status</option>
                                                    <option value="delivered"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'delivered')">
                                                        Delivered
                                                    </option>
                                                    <option value="canceled"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'canceled')">
                                                        Cancelled
                                                    </option>
                                                    <option value="confirmed"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'confirmed')">
                                                        Confirmed
                                                    </option>
                                                    <option value="shipped"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'shipped')">
                                                        Shipped
                                                    </option>
                                                    <option value="return"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'return')">
                                                        Return
                                                    </option>
                                                    <option value="on hold"
                                                        wire:click.prevent="updateOrderStatus({{ $order->id }},'on hold')">
                                                        On
                                                        hold
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                @if ($order->status == 'delivered')
                                                    <label class="badge badge-gradient-success">Delivered</label>
                                                @elseif($order->status == 'confirmed')
                                                    <label class="badge badge-gradient-warning">Confirmed</label>
                                                @elseif($order->status == 'canceled')
                                                    <label class="badge badge-gradient-danger">Canceled</label>
                                                @elseif($order->status == 'shipped')
                                                    <label class="badge badge-gradient-success">Shipped</label>
                                                @elseif($order->status == 'return')
                                                    <label class="badge badge-gradient-success">Return</label>
                                                @elseif($order->status == 'on hold')
                                                    <label class="badge badge-gradient-info">hold</label>
                                                @else
                                                    <label
                                                        class="badge badge-gradient-warning">{{ $order->status }}</label>
                                                @endif
                                            </td>
                                            <td> {{ $order->subtotal }} </td>
                                            <td> <button wire:click.prevent="notification({{ $order->id }})"
                                                    class="btn btn-sm btn-warning-ghost">Order Details</button> </td>
                                        </tr>
                                    @empty
                                        <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card">
                                                <span style="font-size: 22px;text-align:center;padding:5px;">Order Not
                                                    Found!</span>
                                            </div>
                                        </div>
                                    @endforelse
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
