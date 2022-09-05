
@extends('admin.layout')
@section('title')
Pack Pricing
@endsection
@section('admin_content')
<div class="container mt-3">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card ">
      <div class="card ms-4">
        <div class="card-body ms-4">
          <h3 class="text-center text-success"> Pack Pricing</h3>
          <div class="table-responsive">
            <a href="{{url('admin/pack_price/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a><br><br>
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                  <th>SL</th>
                  <th>Company Name</th>
                  <th>Pack Title</th>
                  <th>Pack Sizes</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($packPrice as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->companyName}}</td>
                      <td>{{$item->packTitle}}</td>
                      <td>{{$item->packSizes}}</td>
                      <td>{{$item->price}}</td>
                      <td>
                        <div class="d-flex justify-content-center">
                        <a href="{{url('admin/pack_price/'.$item->id)}}" class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('admin/pack_price/'.$item->id.'/edit')}}" class="btn btn-success btn-sm me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form method="post" action="{{url('admin/pack_price/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
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
</div>
  @endsection

