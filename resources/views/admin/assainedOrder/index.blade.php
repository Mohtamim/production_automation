@extends('admin.layout')
@section('ware-title')
    assign Order
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-md-12 grid-margin">
                        <h2 class="text-center text-success">ASSIGN ORDER</h2>
                        <div class="table-responsive">
                            <a href="{{ url('admin/assaign_order/create') }}" class="btn btn-success btn-sm"
                                title="Add new Customer">
                                Add New
                            </a>
                            <hr class="bg-primary">
                            <br><br>
                            <table id="table" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                                <thead>
                                    <tr>

                                        <th class="text-center">SL</th>
                                        <th class="text-center">Main Order Number</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Warehouse Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assainorders as $assainorder)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $assainorder->mainOrderId }}</td>
                                            <td class="text-center">{{ $assainorder->products->title }}</td>
                                            <td class="text-center">{{ $assainorder->warehouses->warehouseName }}</td>
                                            <td class="text-center">{{ $assainorder->quantity }}</td>
                                            @if ($assainorder->status == 1)
                                                <td>Active</td>
                                            @endif
                                            @if ($assainorder->status == 0)
                                                <td>Deactive</td>
                                            @endif
                                            @if ($assainorder->status == 2)
                                                <td>Processing</td>
                                            @endif
                                            @if ($assainorder->status == 3)
                                                <td>Completed</td>
                                            @endif
                                            @if ($assainorder->status == 4)
                                                <td>Delivered</td>
                                            @endif
                                            @if ($assainorder->status == 5)
                                                <td>Received</td>
                                            @endif
                                            @if ($assainorder->status == 6)
                                                <td>Approved</td>
                                            @endif


                                            <td class="text-center">
                                                <div class="d-flex content-justify-center">
                                                <a href="{{ url('admin/assaign_order/' . $assainorder->id) }}"
                                                    class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ url('admin/assaign_order/' . $assainorder->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <form method="post" action="{{ url('admin/assaign_order/' . $assainorder->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-info btn-sm me-1 btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
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
