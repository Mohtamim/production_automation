@extends('admin.layout')
@section('title')
    Product
@endsection
@section('admin_content')
    <div class="container mt-3">
        <div class="row ">
            <h3 class="text-center text-success font-weight-bold">PRODUCT</h3>
            <div class="table-responsive">
                <a href="{{ url('admin/product/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                    Add Product
                </a><hr>

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
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->title }}</td>
                                        <td class="text-center">{{ $item->category }}</td>
                                        <td class="text-center"><img src="{{ asset($item->img ) }}" style="width: 50px; height:50px;" alt=""></td>
                                        <td class="text-center">{{ $item->unit }}</td>
                                        <td class="text-center">{{ $item->DH_raw_materials }}</td>
                                        <td class="text-center">{{ $item->supplier_raw_materials }}</td>
                                        <td class="text-center">{{ $item->wages }}</td>
                                        <td class="text-center">{{ $item->carring_charge }}</td>
                                        <td class="text-center">{{ $item->treatement_deduction }}</td>
                                        @if ($item->is_sample_product == 1)
                                            <td class="text-center">Yes</td>
                                        @endif
                                        @if ($item->is_sample_product == 0)
                                            <td class="text-center">No</td>
                                        @endif

                                        <td class="text-center">{{ $item->Details }}</td>
                                        <td class="text-center">{{ $item->notes }}</td>
                                        <td class="text-center">{{ $item->totalcost_for_supplier }}</td>
                                        <td class="text-center">{{ $item->DH_total_price }}</td>


                                        <td class="text-center">
                                            <div class="container justify-content-center d-flex ">
                                                <a href="{{ url('admin/product/' . $item->id) }}" class="btn btn-info btn-sm me-1"
                                                    title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                <a href="{{ url('admin/product/' . $item->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
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
@endsection
