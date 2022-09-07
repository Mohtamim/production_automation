@extends('admin.layout')
@section('title')
Category
@endsection
@section('admin_content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">

                    <h2 class="text-center text-success">CATEGOEY</h2>
                    <div class="table-responsive">
                        <a href="{{ url('admin/category/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add Category
                        </a><hr>

                                <table id="table" class="table dt-table-hover"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SL</th>
                                            <th class="text-center">Category Name</th>
                                            <th class="text-center">Category Title</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cat as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $item->catName }}</td>
                                                <td class="text-center">{{ $item->catTitle }}</td>


                                                <td class="text-center">

                                                    <a href="{{url('admin/category/'.$item->id.'/edit')}}" class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                    <form method="POST" action="{{ url('admin/category/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
