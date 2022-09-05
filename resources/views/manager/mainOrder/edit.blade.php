@extends('admin.layout')
@section('title')
    Main Order
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h4>Edit Order</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/main_order/'.$mainorder->id) }}" method="POST">
                {!! csrf_field() !!}
                 @method("PATCH")
                <div class="mb-3">
                    <label for="productName" class="control-label">Product Name</label><br>
                <input type="text" name="productName" value="{{ $mainorder->productName }}" id="productName" class="form-control @error('productName')
                  is-invalid
                   @enderror">
                   @error('productName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="mb-3">
                    <label for="quantity" class="control-label">Quantity</label><br>
                <input type="text" name="quantity" value="{{ $mainorder->quantity }}" id="quantity" class="form-control @error('quantity')
                  is-invalid
                   @enderror" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="unitPrice" class="control-label">Unit Price</label><br>
                <input type="text" name="unitPrice" value="{{ $mainorder->unitPrice }}" id="unitPrice" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror" >
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="totalPrice" class="control-label">Total Price</label><br>
                <input type="text" name="totalPrice" id="totalPrice" value="{{ $mainorder->totalPrice }}" class="form-control @error('totalPrice')
                  is-invalid
                   @enderror" >
                   @error('totalPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3" style="minWidth:678px">

                    <select id="status" class="form-select" name="status">
                        @if ($mainorder->status==1)
                        <option value="1" selected>Active</option>
                        <option value="0">Deactive</option>
                        @endif
                        @if ($mainorder->status==0)
                        <option value="1">Active</option>
                        <option value="0" selected>Deactive</option>
                        @endif
                    </select>
                </div>
                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
