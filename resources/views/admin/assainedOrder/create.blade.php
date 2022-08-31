@extends('admin.layout')
@section('ware-title')
WareHose
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                    <h4 class="text-center"> Assaign Order</h4>
                    <a href="{{ url('admin/assaign_order') }}" class="btn btn-info text-center justify-content-start my-4"> Assaign Order</a>
                </div>

            </div>

        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/assaign_order') }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="mainOrderId">Main Order Id:</span>
                    <input type="number" class="form-control @error('mainOrderId')
                     is-invalid
                    @enderror" name="mainOrderId" placeholder="Enter MainOrder Id">
                    @error('mainOrderId')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="warehouseId">Ware House Id:</span>
                    <input type="number" class="form-control @error('warehouseId')
                    is-invalid

                    @enderror" name="warehouseId" placeholder="Enter warehouseId" aria-label="Enter your Assign Order Id" aria-describedby="basic-addon2">
                    @error('warehouseId')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Quantity:</span>
                    <input type="number" class="form-control @error('quantity')
                     is-invalid
                    @enderror" name="quantity" placeholder="Enter  quantity" aria-label="Enter  quantity " aria-describedby="basic-addon2">
                    @error('quantity')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                    @enderror
                </div>
                <div class="input-group mb-3" style="minWidth:678px">

                    <select id="status" class="form-select" name="status">
                        <option value="" >Select Status</option>
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
