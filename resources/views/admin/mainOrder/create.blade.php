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
                    <h4>Take Order</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/main_order') }}" method="POST">
                {!! csrf_field() !!}

                <hr>
                <div class="input-group mb-3">
                    <label for="product" class="control-label">Product:</label><hr>
                    <select id="status" class="form-select select2 @error('productName')
                    is-invalid
                     @enderror" name="productName" id="productName">
                        <option value="" >Select Product</option>
                        @foreach ($product as $pro )
                        <option value="{{$pro->id  }}">{{ $pro->productName}}</option>
                        @endforeach

                    </select>
                    @error('productName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>


                <div class="mb-3">
                    <label for="quantity" class="control-label">Quantity</label><br>
                <input type="text" name="quantity" id="quantity" class="form-control @error('quantity')
                  is-invalid
                   @enderror" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="unitPrice" class="control-label">Unit Price</label><br>
                <input type="text" name="unitPrice" id="unitPrice" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror" >
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="totalPrice" class="control-label">Total Price</label><br>
                <input type="text" name="totalPrice" id="totalPrice" class="form-control @error('totalPrice')
                  is-invalid
                   @enderror" >
                   @error('totalPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
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
</div>
<script>
    $('.select2').select2();
</script>
@endsection
