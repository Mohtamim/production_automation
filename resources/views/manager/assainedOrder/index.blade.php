@extends('manager.layout')
@section('ware-title')
    assign Order
@endsection
@section('manager_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card ">
                <div class="card ms-4">
                    <div class="card-body ms-4">
                        <h3 class="text-center text-success"> Assign Order</h3>
                        <div class="table-responsive">
                            <a href="{{ url('manager/order/create') }}" class="btn btn-success btn-sm"
                                title="Add new Customer">
                                Add New
                            </a><br><br>
                            <table id="dataTableExample" class="dataTable table w-100">
                                <thead>
                                    <tr>

                                        <th>SL</th>
                                        <th>Order Id</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->mainOrderId }}</td>
                                            <td>{{ $order->products->title }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            @if ($order->status == 1)
                                                <td>Active</td>
                                            @endif
                                            @if ($order->status == 0)
                                                <td>Deactive</td>
                                            @endif
                                            @if ($order->status == 2)
                                                <td>Processing</td>
                                            @endif
                                            @if ($order->status == 3)
                                                <td>Completed</td>
                                            @endif
                                            @if ($order->status == 4)
                                                <td>Delivered</td>
                                            @endif
                                            @if ($order->status == 5)
                                                <td>Received</td>
                                            @endif
                                            @if ($order->status == 6)
                                                <td>Approved</td>
                                            @endif


                                            <td class="text-center">
                                                <a href="{{ url('manager/order/' . $order->id) }}"
                                                    class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ url('manager/order/' . $order->id . '/edit') }}"
                                                    class="btn btn-success btn-sm"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>


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
