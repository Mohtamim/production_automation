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
                    <h2 class="text-center text-success h2 font-weight-bold mt-3">EDIT ORDER</h2>
                </div>
            </div>
        </div><hr class="bg-primary">
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/main_order/'.$mainorder->id) }}" method="POST">
                {!! csrf_field() !!}
                 @method("PATCH")
                 <div class="input-group mb-3">
                    <select  class="form-select select2 @error('productName')
                    is-invalid
                     @enderror" name="productName" id="productName">
                    <option value="{{ $mainorder->productId }}" selected>{{ $mainorder->productId }}</option>
                        @foreach ($product as $pro )
                        <option value="{{$pro->id  }}">{{ $pro->title}}</option>
                        @endforeach

                    </select>
                    @error('productName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Quantity</span><br>
                <input type="text" name="quantity" value="{{ $mainorder->quantity }}" id="quantity" class="form-control @error('quantity')
                  is-invalid
                   @enderror" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Unit Price(USD)</span><br>
                <input type="text" name="unitPrice" value="{{ $mainorder->unitPrice }}" id="unitPrice" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror">
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Total Price(USD)</span><br>
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
                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{ url('admin/main_order') }}" class="btn btn-secondary">Cancel</a>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
