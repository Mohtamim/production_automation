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
                            <table id="table table-responsive text-center multi-table table dt-table-hover" class="table" style="white-space: nowrap;  text-overflow:ellipsis;">
                                <thead>
                                    <tr>

                                        <th class="text-center">SL</th>
                                        <th class="text-center">Main Order Number</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Warehouse Id</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assain as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->mainOrderId }}</td>
                                            <td class="text-center">{{ $item->productName }}</td>
                                            <td class="text-center">{{ $item->warehouseId }}</td>
                                            <td class="text-center">{{ $item->quantity }}</td>
                                            @if ($item->status == 1)
                                                <td class="text-center">Active</td>
                                            @endif
                                            @if ($item->status == 0)
                                                <td class="text-center">Deactive</td>
                                            @endif


                                            <td class="text-center">
                                                <div class="d-flex content-justify-center">
                                                <a href="{{ url('admin/assaign_order/' . $item->id) }}"
                                                    class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ url('admin/assaign_order/' . $item->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <form method="post" action="{{ url('admin/assaign_order/' . $item->id) }}">
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
