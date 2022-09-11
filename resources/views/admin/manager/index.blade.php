@extends('admin.layout')
@section('manager-title')
    Manager
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">

            <h2 class="text-center text-success font-weight-bold mt-3">WAREHOUSE MANAGER</h2>
            <hr class="bg-primary">
            <div class="table-responsive">
                        <table id="table" class="dataTable table-responsive text-center multi-table table dt-table-hover"  cellspacing="0" style="white-space: nowrap;  text-overflow:ellipsis;">
                            <thead>
                                <tr>

                                    <th class="text-center">SL</th>
                                    <th class="text-center">Manager ID</th>
                                    <th class="text-center">Warehouse Manager Name</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Warehouse Id</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($manager as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->managerId }}</td>
                                        <td class="text-center">{{ $item->managerName }}</td>
                                        <td class="text-center">{{ $item->userName }}</td>
                                        <td class="text-center">{{ $item->phone }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        {{-- <td>{{ DB::Table('warehouses')->select('warehouseName')->where('id',$item->warehouseId)->get();}}</td> --}}
                                        <td class="text-center">{{ $item->warehouseId }}</td>

                                        <td class="text-center">

                                            <a href="{{ url('admin/managers/' . $item->id) }}" class="btn btn-info btn-sm"
                                                title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{ url('admin/managers/' . $item->id . '/edit') }}"
                                                class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i
                                                    class="fa fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm"
                                                aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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
@endsection
