@extends('admin.layout')
@section('title')
Category
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">

                    <h2 class="text-center text-success font-weight-bold">MATERIAL CATEGOEY</h2>
                    <div class="table-responsive">
                        <a href="{{ url('admin/material_category/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add Material Category
                        </a><hr>

                                <table id="table" class="dataTable table"   cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SL</th>
                                            <th class="text-center">Material Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Unit Price</th>
                                            <th class="text-center">Total Price</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($matCat as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $item->materailName, }}</td>
                                                <td class="text-center">{{ $item->quantity, }}</td>
                                                <td class="text-center">{{ $item->unitPrice, }}</td>
                                                <td class="text-center">{{ $item->totalPrice }}</td>


                                                <td class="text-center">

                                                    <a href="{{url('admin/material_category/'.$item->id.'/edit')}}" class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                    <form method="POST" action="{{ url('admin/material_category/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" id="{{ $item->id }}" class="btn btn-danger btn-sm delete-confirm" title="Delete unit" ><i class="fa-solid fa-trash"></i></button>
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
@endsection
