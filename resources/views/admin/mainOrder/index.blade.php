@extends('admin.layout')
@section('title')
    Main Order
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin ">
            <h2 class="text-center text-success mt-2">Main Order</h2>

            <div class="table-responsive">
                <a href="{{ url('admin/main_order/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                    Add New
                </a><hr class="bg-primary">
<<<<<<< HEAD
=======


>>>>>>> 00a545be0b2764bbcbfeff5584bab72dd51c9806
                        <table id="table table-responsive text-center multi-table table dt-table-hover" width=100% class="table"
                            style="white-space: nowrap; text-overflow:ellipsis;">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Remain for Assaign</th>
                                    <th class="text-center">UnitPrice</th>
                                    <th class="text-center">TotalPrice</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->products->title }}</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-center">{{ $item->remaing_quantity }}</td>
                                        <td class="text-center">{{ $item->unitPrice }}</td>
                                        <td class="text-center">{{ $item->totalPrice }}</td>
                                        @if ($item->status == 1)
                                            <td class="text-center">Active</td>
                                        @endif

                                        @if ($item->status == 0)
                                            <td class="text-center">Deactive</td>
                                        @endif
                                        <td class="text-center">
                                            <a href="{{ url('admin/main_order/' . $item->id . '/edit') }}"
                                                class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form method="POST" action="{{ url('admin/main_order/' . $item->id) }}"
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
@endsection
