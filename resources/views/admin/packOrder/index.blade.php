
@extends('admin.layout')
@section('title')
Pack Order
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
<div class="row">
    <div class="col-md-12 grid-margin  ">

          <h3 class="text-center text-success"> Pack Order</h3>
          <div class="table-responsive">
            <a href="{{url('admin/pack_order/create')}}" class="btn btn-success btn-sm" title="Add new pack_order">
                Add Pack Order
            </a><br><br>
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                  <th>SL</th>
                  <th>Proformal Invoice</th>
                  <th>Company</th>
                  <th>Pack</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>TotalCost</th>
                  <th>PayAmount</th>
                  <th>Note</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($packorder as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->proformalInvoice}}</td>
                      <td>{{$item->company}}</td>
                      <td>{{$item->pack}}</td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->quantity}}</td>
                      <td>{{$item->totalCost}}</td>
                      <td>{{$item->payAmount}}</td>
                      <td>{{$item->note}}</td>
                      <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('admin/pack_order/'.$item->id)}}" class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('admin/pack_order/'.$item->id.'/edit')}}" class="btn btn-success btn-sm me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form method="post" action="{{url('admin/pack_order/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}<button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>

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

