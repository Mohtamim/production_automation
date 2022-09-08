@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row ">
            <div class="col-md-12 grid-margin stretch-card ">

                <h3 class="text-center text-success font-weight-bold mt-3">WAREHOUSE</h3>
                <div class="table-responsive">
                    <a href="{{ url('admin/warehouses/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                        Add New
                    </a>
                    <hr class="bg-primary">

                    <table id="table" class="table dt-table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Warehouse Name</th>
                                <th class="text-center">Address</th>

                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($warehouse as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->warehouseName }}</td>
                                    <td class="text-center">{{ $item->address }}</td>

                                    <td class="text-center">

                                        <a href="{{ url('admin/warehouses/' . $item->id . '/edit') }}"
                                            class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i
                                                class="fa fa-pen-to-square"></i></a>
                                        <form method="POST" action="{{ url('admin/warehouses/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm"
                                                aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
