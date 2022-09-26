@extends('admin.layout')
@section('ware-title')
Material Category
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center h2 text-success font-weight-bold">ADD MATERIAL CATEGORY</h3>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/material_category') }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Material Name:</span>
                    <input type="text"  value="{{ old('materailName') }}" id="materailName" class="form-control @error('materailName')
                    is-invalid
                    @enderror" name="materailName" placeholder="Enter your Category Name">
              @error('materailName')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Quantity:</span>
                    <input type="text"  class="form-control @error('quantity')
                    is-invalid
                    @enderror price_calc"  name="quantity"  value="{{ old('quantity') }}" id="quantity" placeholder="Enter your categoryTitle" aria-label="Enter your  quantity" aria-describedby="basic-addon2">
                    @error('quantity')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Unit Price:</span>
                    <input type="text"  class="form-control @error('unitPrice')
                    is-invalid
                    @enderror price_calc" name="unitPrice"  value="{{ old('unitPrice') }}" id="unitPrice"
                    placeholder="unit Price:100"  aria-label="Enter your  unitPrice" aria-describedby="basic-addon2">
                    @error('unitPrice')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Total Price:</span>
                    <input type="text"  class="form-control @error('totalPrice')
                    is-invalid
                    @enderror" name="totalPrice"  value="{{ old('totalPrice') }}" id="totalPrice" placeholder="Enter your categoryTitle" aria-label="Enter your  totalPrice " aria-describedby="basic-addon2">
                    @error('totalPrice')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>

                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/material_category') }}">Cancel</a>
              </form>

        </div>
    </div>
</div>
<script type="text/javascript">
   $(".price_calc").on('input', function() {
        var quantity = $("#quantity").val();
        var unitPrice = $("#unitPrice").val();
        var totalPrice = $("#totalPrice").val();

        var result=quantity*unitPrice;
        $('#totalPrice').val(result);

    })
</script>

@endsection
