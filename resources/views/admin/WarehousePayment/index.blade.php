@extends('admin.layout')
@section('title')
    WareHose-Payment
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row ">
        <h2 class="text-center text-success font-weight-bold mt-3">Warehouse Payment</h2>
        <div class="table-responsive">
                            <a href="{{ url('admin/warehouse_payments/create') }}" class="btn btn-success btn-sm" title="Add Warehouse Payment">
                                Add New
                            </a> <hr class="bg-primary">
                            <br><br>

                                    <table id="table"  class="dataTable table table-responsive text-center multi-table table dt-table-hover" style="white-space: nowrap;  text-overflow:ellipsis;">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">SL</th>
                                                <th class="text-center">Manager Name</th>
                                                <th class="text-center">Manager ID</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Warehouse Name</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($warehousePayment as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $item->managerName }}</td>
                                                    <td class="text-center">{{ $item->managerId }}</td>
                                                    <td class="text-center">{{ $item->email }}</td>
                                                    <td class="text-center">{{ $item->warehouseName }}</td>
                                                    <td class="text-center">{{ $item->amount}}</td>
                                                    <td class="text-center">{{ $item->date }}</td>

                                                    <td class="text-center">

                                                        <a href="{{ url('admin/warehouse_payments/' . $item->id) }}"
                                                            class="btn btn-info btn-sm" title="View customer"
                                                            aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                        <a href="{{ url('admin/warehouse_payments/' . $item->id . '/edit') }}"
                                                            class="btn btn-success btn-sm" title="Edit Customer"
                                                            aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                        <form method="POST"
                                                            action="{{ url('admin/warehouse_payments/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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
        </div>

@endsection
