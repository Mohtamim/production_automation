@extends('admin.layout')
@section('admin_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cards</h1>
        </div>

        <div class="row">

            <!-- wareHouse Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" >
                <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E1F0FF">
                    <div class="card-body" >
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                  <a href="{{ url('admin/warehouses') }}">Warehouses</a> </div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" >{{ $warhouses }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-home fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/users') }}">Users</a></div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{$users  }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/pack_size') }}">Pack Size</a></div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{$packsizes  }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2" style="background-color: #CBE9BF">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/category') }}">Category</a></div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{  $category }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-map fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- wareHouse Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" >
                <div class="card border-left-primary shadow h-100 py-2" style="background-color: #CCE8FF">
                    <div class="card-body" >
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                  <a href="{{ url('admin/product') }}">Products</a> </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{  $product }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-arrows-to-dot fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #C9F7F5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/unit') }}">Unit</a></div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $unit }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-scale-balanced fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #C9F7F5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/buyers') }}">Buyers</a></div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $buyer }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-scale-balanced fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2" style="background-color: #FFF4DE">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/main_order') }}">Active Order</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $activeorders }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-bucket fa-2x text-success-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- wareHouse Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" >
                <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E1F0FF">
                    <div class="card-body" >
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                  <a href="{{ url('admin/assaign_order') }}">Pending Order</a> </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $pendingorders }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-rocket fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/packaging_company') }}">Packaging Company</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $package_company }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-house-circle-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/pack_order') }}">Pack Order</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $pack_order }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-house-circle-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2" style="background-color: #CBE9BF">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                    <a href="{{ url('admin/assign-order') }}">Assign Order</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center text-center">{{ $assignOrder }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>


    <!-- /.container-fluid -->
@endsection
