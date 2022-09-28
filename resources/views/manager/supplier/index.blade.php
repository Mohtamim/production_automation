@extends('admin.layout')
@section('title')
    Supplier
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
                    <h3 class="text-center text-success">Warehouse Supplier</h3>
                    <div class="table-responsive">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="dataTable table dt-table-hover"   cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>SL</th>
                                            <th>Supplier ID</th>
                                            <th>Warehouse Supplier Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Warehouse Id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->supplierId }}</td>
                                                <td>{{ $item->supplierName }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                {{-- <td>{{ DB::Table('warehouses')->select('warehouseName')->where('id',$item->warehouseId)->get();}}</td> --}}
                                                <td>{{ $item->warehouseId }}</td>

                                                <td>
                                                    <a href="{{url('manager/supplier/'.$item->id)}}" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('manager/supplier/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pencil"></i></a>
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

@endsection
