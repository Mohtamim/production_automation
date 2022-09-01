@extends('admin.layout')
@section('title')
Product
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h3 class="text-center text-success">Product</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/product/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add Product
                        </a><br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title </th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Unit</th>
                                            <th>DH_raw_materials</th>
                                            <th>Supplier_raw_materials</th>
                                            <th>Wages</th>
                                            <th>Carring charge</th>
                                            <th>Treatement_deduction</th>
                                            <th>Is_sample_product</th>
                                            <th>Details</th>
                                            <th>Notes</th>
                                            <th>Totalcost for Supplier</th>
                                            <th>DH_total_price</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->category }}</td>
                                                <td>{{ $item->img }}</td>
                                                <td>{{ $item->unit }}</td>
                                                <td>{{ $item->DH_raw_materials }}</td>
                                                <td>{{ $item->supplier_raw_materials }}</td>
                                                <td>{{ $item->wages }}</td>
                                                <td>{{ $item->carring_charge }}</td>
                                                <td>{{ $item->treatement_deduction }}</td>
                                                <td>{{ $item->is_sample_product }}</td>
                                                <td>{{ $item->Details }}</td>
                                                <td>{{ $item->notes }}</td>
                                                <td>{{ $item->totalcost_for_supplier }}</td>
                                                <td>{{ $item->DH_total_price }}</td>


                                                <td>
                                                    <a href="{{ url('admin/product/' . $item->id . '/edit') }}"
                                                        class="btn btn-success">Edit</a>
                                                        <form method="POST" action="{{ url('admin/product/' . $item->id) }}">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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