
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
          <h3 class="text-center text-success"> Assign Order</h3>
          <div class="table-responsive">
            <a href="{{url('admin/pack_size/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a><br><br>
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                  <th>SL</th>
                  <th>mainOrderId</th>
                  <th>warehouseId</th>
                  <th>quantity</th>
                  <th>status</th>
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
                      @if ($item->status==1)
                      <td>Active</td>
                      @endif
                      @if ($item->status==0)
                      <td>Deactive</td>
                      @endif


                      <td>
                        <a href="{{url('admin/assaign_order/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('admin/assaign_order/'.$item->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form method="post" action="{{url('admin/assaign_order/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
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
  @endsection

