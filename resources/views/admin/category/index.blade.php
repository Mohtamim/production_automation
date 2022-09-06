@extends('admin.layout')
@section('title')
Category
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h3 class="text-center text-success">Category</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/category/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add Category
                        </a><br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="table dt-table-hover"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>category Name</th>
                                            <th>category Title</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cat as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->catName }}</td>
                                                <td>{{ $item->catTitle }}</td>


                                                <td>
                                                   
                                                    <a href="{{url('admin/category/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pencil"></i></a>
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
            </div>
        </div>
    </div>

@endsection
