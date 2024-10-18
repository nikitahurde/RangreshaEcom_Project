<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Category Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
       
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Category Table</h4>
              {{-- <p class="card-description"> Add class <code>.table-hover</code> --}}
              </p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Category name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categorys as $category )
                        
                    <tr>
                      <td>{{$category->category_name}}</td>
                      <td>{{$category->slug}}</td>
                      <td><img src="{{ asset('assets/images/category') }}/{{ $category->image }}"
                        alt="vvf"></td>
                      <td><label class="badge badge-info"> <a href="{{route('admin.category.edit',['category_slug' => $category->slug])}}">Edit </a></label>
                        <label class="badge badge-danger"><a href="" wire:click.prevent="deleteCategory({{$category->id}})"> Delete</a></label></td>
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