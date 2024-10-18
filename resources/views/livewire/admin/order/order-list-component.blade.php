<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <h1 class="page-title fw-medium fs-18 mb-2">Orders</h1>
                    <div class="">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                {{-- <div class="btn-list">
                            <button class="btn btn-primary-light btn-wave me-2">
                                <i class="bx bx-crown align-middle"></i> Plan Upgrade
                            </button>
                            <button class="btn btn-secondary-light btn-wave me-0" wire:click="export">
                                <i class="ri-upload-cloud-line align-middle"></i> Export Order
                            </button>
                        </div> --}}
            </div>




            @livewire('admin.order.order-status-component')
            <!--End::row-1 -->
            {{-- <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                          <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                      <li class="page-item">
                          <a class="page-link" href="javascript:void(0);">Next</a>
                      </li>
                  </ul> --}}

        </div>
    </div>



</div>
