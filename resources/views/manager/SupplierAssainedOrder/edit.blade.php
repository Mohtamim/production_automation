@extends('manager.layout')
@section('ware-title')
WareHose
@endsection
@section('manager_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 class="text-center">Edit Order Status</h4>
                </div>
            </div>
        </div>
        @foreach ($orders as $orders)
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('manager/supplier-assign-order/'.$orders->id) }}" method="POST">
                {!! csrf_field() !!}
                @method('PUT')


            <div class="row">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="mainOrderId">Main Order Id:</span>
                    <input type="text" disabled  value="{{$orders->mainOrderId}}" class="form-control text-primary font-weight-bold  @error('mainOrderId')
                     is-invalid
                    @enderror" name="mainOrderId" placeholder="Enter your Main Order Id">
                    @error('mainOrderId')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Quantity:</span>
                    <input type="number" value="{{$orders->quantity}}" class="form-control font-weight-bold text-info @error('quantity')
                     is-invalid
                    @enderror" name="quantity" placeholder="Enter your quantity"  aria-label="Enter your quantity " aria-describedby="basic-addon2">
                    @error('quantity')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                    @enderror
                </div>

            </div>
<div class="row">
    <div class="input-group mb-3 col">
        <span class="input-group-text bg-light text-black font-weight-bold" id="warehouseId">Product Name:</span>
        <input type="text" value="{{$orders->products->title}}" class="form-control text-success font-weight-bold @error('warehouseId')
        is-invalid

        @enderror" name="warehouseId" disabled placeholder="Enter your warehouseId" aria-label="Enter your Assign Order Id" aria-describedby="basic-addon2">
        @error('warehouseId')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

    </div>

</div>
<div class="input-group mb-3 col  " style="minWidth:678px">

    <select id="status" class="form-select m-8 w-25 text-center @error('status')
        is-invalid
    @enderror " name="status">
        <option value="">Select Status</option>
        @if ($orders->status==1)
        <option value="1" selected>Active</option>
        <option value="2" >Processing</option>
        <option value="3" >Completed</option>
        <option value="4" >Delivered</option>
        @endif
        @if ($orders->status==2)
        <option value="2" selected>Processing</option>
        <option value="3" >Completed</option>
        <option value="4" >Delivered</option>
        @endif
        @if ($orders->status==3)
        <option value="2" >Processing</option>
        <option value="3" selected>Completed</option>
        <option value="4" >Delivered</option>
        @endif
        @if ($orders->status==4)
        <option value="2" >Processing</option>
        <option value="3" >Completed</option>
        <option value="4" selected>Delivered</option>
        @endif
        @if ($orders->status==5)
        <option value="5" selected>Received</option>
        @endif
        @if ($orders->status==6)
        <option value="6" selected>Approved</option>
        @endif

    </select>
    @error('status')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
</div>

@endforeach
                <div class="  float-right">
                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </div>
              </form>

        </div>
    </div>
</div>
@endsection
