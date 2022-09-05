@extends('admin.layout')
@section('title')
    Main Order
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h3 class="text-center text-success">Main Order</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/main_order/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add New
                        </a><br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="table dt-table-hover"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>UnitPrice</th>
                                            <th>TotalPrice</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mainorder as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->productName }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->unitPrice }}</td>
                                                <td>{{ $item->totalPrice }}</td>
                                                @if ($item->status==1)
                                                <td>Active</td>
                                                @endif

                                               @if ($item->status==0)
                                                <td>Deactive</td>
                                                @endif
                                                <td>
                                                    <a href="{{url('admin/main_order/'.$item->id)}}" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/main_order/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                    <form method="POST" action="{{ url('admin/main_order/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete customer" onclick="return confirm("Confirm delete?")"><i class="fa-solid fa-toggle-on"></i></button>
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
        </div>
    </div>

@endsection
