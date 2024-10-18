<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Category Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
       
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product Table</h4>
              {{-- <p class="card-description"> Add class <code>.table-hover</code> --}}
              </p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Product name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product )
                        
                    <tr>
                      <td>{{$product->name}}</td>
                      <td>{{$product->slug}}</td>
                      <td><img src="{{ asset('assets/images/product') }}/{{ $product->image }}"
                        alt="no image"></td>
                      <td><label class="badge badge-info">
                         <a href="{{ route('admin.product.edit', ['product_id' => $product->id]) }}">Edit</a></label>
                        <label class="badge badge-danger"><a href="" wire:click.prevent="deleteProduct({{$product->id}})">Delete</a></label>
                      </td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
        
       
        
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid d-flex justify-content-between">
        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>