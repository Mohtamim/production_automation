
@extends('admin.layout')
@section('title')
Pack Size
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
<div class="row mb-4">
    <div class="col-md-12 grid-margin  ">

          <h3 class="text-center text-success font-weight-bold mt-3">PACKAGE SIZE</h3>
          <div class="table-responsive">
            <a href="{{url('admin/pack_size/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a>
            <hr>
            <table id="dataTableExample" class="dataTable table ">
              <thead>
                <tr>

                  <th class="text-center">SL</th>
                  <th class="text-center">Pack Name</th>
                  <th class="text-center">length</th>
                  <th class="text-center">width</th>
                  <th class="text-center">height</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($assain as $item)
                  <tr>
                      <td class="text-center">{{$loop->iteration}}</td>
                      <td class="text-center">{{$item->title}}</td>
                      <td class="text-center">{{$item->length}}</td>
                      <td class="text-center">{{$item->width}}</td>
                      <td class="text-center">{{$item->height}}</td>
                      <td class="text-center">
                        <div class="d-flex content-justify-center">

                        <a href="{{url('admin/pack_size/'.$item->id.'/edit')}}" class="btn btn-success btn-sm me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form method="post" action="{{url('admin/pack_size/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </diV>
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

