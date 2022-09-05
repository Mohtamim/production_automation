@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
<div class="container mt-3">
    <div class="row ">
        <h3 class="text-center text-success">Buyers</h3>
        <div class="table-responsive">
                            <a href="{{ url('admin/buyers/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                                Add New
                            </a><br><br>
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-8">
                                    <table id="table" class="table table-responsive text-center multi-table table dt-table-hover" style="white-space: nowrap;  text-overflow:ellipsis;">
                                        <thead class="">
                                            <tr>
                                                <th>SL</th>
                                                <th>Buyer Code</th>
                                                <th>buyerName</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>img</th>
                                                <th>country</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($buyer as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->buyerCode }}</td>
                                                    <td>{{ $item->buyerName }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td><img src="{{asset($item->img) }}" style="width: 50px; height:50px;" alt=""></td>
                                                    <td>{{ $item->country }}</td>

                                                    <td>

                                                        <a href="{{ url('admin/buyers/' . $item->id) }}"
                                                            class="btn btn-info btn-sm" title="View customer"
                                                            aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                        <a href="{{ url('admin/buyers/' . $item->id . '/edit') }}"
                                                            class="btn btn-primary btn-sm" title="Edit Customer"
                                                            aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                        <form method="POST"
                                                            action="{{ url('admin/buyers/' . $item->id) }}"
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
            </div>
        </div>

@endsection
