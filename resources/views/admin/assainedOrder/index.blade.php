
@extends('admin.layout')
@section('ware-title')
assign Order
@endsection
@section('admin_content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">Dashboard|assign Order</h3>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th></th>
                  <th> Name</th>
                  <th>Address</th>

                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($assain as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->mainOrderId}}</td>
                      <td>{{$item->warehouseId}}</td>
                      <td>{{$item->quantity}}</td>
                      <td>{{$item->status}}</td>

                      <td>
                        <a href="{{url('/assaign_order/'.$item->id)}}" class="btn btn-info">Show</a>
                        <a href="{{url('/assaign_order/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                        <form method="post" action="{{url('/assaign_order/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>

                   @endforeach
              </tbody>
            </table>

            <a href="{{url('/assaign_order/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

