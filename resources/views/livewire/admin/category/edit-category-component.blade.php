<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Category Information</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category</h4>
                        {{-- <p class="card-description"> Basic form layout </p> --}}
                        <form class="forms-sample" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Category name" wire:model="category_name" wire:keyup="generateslug">
                            </div>
                            <div class="form-group">
                                <label>Category slug</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="slug"
                                    wire:model="slug">
                            </div>
                            <div class="form-group">
                                <label>Category Image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    wire:model="newimage">

                                @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="120" />
                                @else
                                    <img src="{{ asset('assets/images/category') }}/{{ $image }}" width="120"
                                        alt="">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com
                2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                    href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                    template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
