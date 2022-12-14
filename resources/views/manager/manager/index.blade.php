@extends('admin.layout')
@section('manager-title')
    Manager
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h3 class="text-center text-success">Warehouse Manager</h3>
                    <div class="table-responsive">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="dataTable table dt-table-hover"   cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>SL</th>
                                            <th>Manager ID</th>
                                            <th>Warehouse Manager Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Warehouse Id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($manager as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->managerId }}</td>
                                                <td>{{ $item->managerName }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                {{-- <td>{{ DB::Table('warehouses')->select('warehouseName')->where('id',$item->warehouseId)->get();}}</td> --}}
                                                <td>{{ $item->warehouseId }}</td>

                                                <td>
                                                    <a href="{{url('admin/managers/'.$item->id)}}" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/managers/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pencil"></i></a>
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
        </div>
    </div>

@endsection
