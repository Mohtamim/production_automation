@extends('admin.layout')
@section('ware-title')
WareHose
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 class="text-center">Edit Assaign Order</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/assaign_order/'.$assain->id) }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="mainOrderId">Main Order Id:</span>
                    <input type="number" value="{{$assain->mainOrderId}}" class="form-control @error('mainOrderId')
                     is-invalid
                    @enderror" name="mainOrderId" placeholder="Enter your Main Order Id">
                    @error('mainOrderId')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="warehouseId">Ware House Id:</span>
                    <input type="number" value="{{$assain->warehouseId}}" class="form-control @error('warehouseId')
                    is-invalid

                    @enderror" name="warehouseId" placeholder="Enter your warehouseId" aria-label="Enter your Assign Order Id" aria-describedby="basic-addon2">
                    @error('warehouseId')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Quantity:</span>
                    <input type="number" value="{{$assain->quantity}}" class="form-control @error('quantity')
                     is-invalid
                    @enderror" name="quantity" placeholder="Enter your quantity" aria-label="Enter your quantity " aria-describedby="basic-addon2">
                    @error('quantity')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                    @enderror
                </div>
                <div class="input-group mb-3" style="minWidth:678px">

                    <select id="status" class="form-select" name="status">
                        <option value="" >Select Status</option>
                        @if ($assain->status==1)
                        <option value="1" selected>Active</option>
                        @endif
                        @if ($assain->status==0)
                        <option value="0" selected>Deactive</option>
                        @endif
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>

                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>

        </div>
    </div>
</div>
@endsection
