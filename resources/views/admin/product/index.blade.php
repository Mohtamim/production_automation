@extends('admin.layout')
@section('title')
    Product
@endsection
@section('admin_content')
    <div class="container mt-3">
        <div class="row ">
            <h3 class="text-center text-success">Product</h3>
            <div class="table-responsive">
                <a href="{{ url('admin/product/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                    Add Product
                </a><br><br>
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="table" class="table table-responsive text-center multi-table table dt-table-hover" style="white-space: nowrap;  text-overflow:ellipsis;">
                            <thead>
                                <tr >
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Title </th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">DH Materials Cost</th>
                                    <th class="text-center">Warehouse Material Cost</th>
                                    <th class="text-center">Wages</th>
                                    <th class="text-center">Carring charge</th>
                                    <th class="text-center">Treatement Cost</th>
                                    <th class="text-center">Is sample product?</th>
                                    <th class="text-center">Details</th>
                                    <th class="text-center">Notes</th>
                                    <th class="text-center">Warehouse Total Cost</th>
                                    <th class="text-center">DH Total Cost</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td><img src="{{ asset($item->img ) }}" style="width: 50px; height:50px;" alt=""></td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->DH_raw_materials }}</td>
                                        <td>{{ $item->supplier_raw_materials }}</td>
                                        <td>{{ $item->wages }}</td>
                                        <td>{{ $item->carring_charge }}</td>
                                        <td>{{ $item->treatement_deduction }}</td>
                                        @if ($item->is_sample_product == 1)
                                            <td>Yes</td>
                                        @endif
                                        @if ($item->is_sample_product == 0)
                                            <td>No</td>
                                        @endif

                                        <td>{{ $item->Details }}</td>
                                        <td>{{ $item->notes }}</td>
                                        <td>{{ $item->totalcost_for_supplier }}</td>
                                        <td>{{ $item->DH_total_price }}</td>


                                        <td>
                                            <div class="container justify-content-center d-flex ">
                                                <a href="{{ url('admin/product/' . $item->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                <form method="POST" action="{{ url('admin/product/' . $item->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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
@endsection
