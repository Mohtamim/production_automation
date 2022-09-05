
@extends('admin.layout')
@section('title')
Pack Size
@endsection
@section('admin_content')
<div class="container mt-3">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card ">
      <div class="card ms-4">
        <div class="card-body ms-4">
          <h3 class="text-center text-success">Pack Size</h3>
          <div class="table-responsive">
            <a href="{{url('admin/pack_size/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a><br><br>
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                  <th>SL</th>
                  <th>Pack Name</th>
                  <th>length</th>
                  <th>width</th>
                  <th>height</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($assain as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->length}}</td>
                      <td>{{$item->width}}</td>
                      <td>{{$item->height}}</td>
                      <td>
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
  </div>
</div>
  @endsection

