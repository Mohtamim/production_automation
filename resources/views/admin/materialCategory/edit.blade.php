@extends('admin.layout')
@section('ware-title')
Category
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-success text-center font-weight-bold mt-3" >EDIT Material  CATEGORY</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/material_category/'.$matCat->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Materail Name:</span>
                    <input type="text" class="form-control @error('materailName,')
                    is-invalid
                    @enderror" name="materailName," id="materailName," placeholder="Enter your Category Name" value="{{ $cat->materailName, }}" >
              @error('materailName,')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Quantity:</span>
                    <input type="text" class="form-control @error('quantity')
                    is-invalid
                    @enderror" name="quantity" id="quantity" value="{{ $matCat->quantity }}"  aria-describedby="basic-addon2">
                    @error('quantity')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Unit Price:</span>
                    <input type="text" class="form-control @error('unitPrice')
                    is-invalid
                    @enderror" name="unitPrice" id="unitPrice"  value="{{ $matCat->unitPrice }}"  aria-label="Enter your unitPrice" aria-describedby="basic-addon2">
                    @error('unitPrice')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Total Price :</span>
                    <input type="text" class="form-control @error('totalPrice ')
                    is-invalid
                    @enderror" name="totalPrice " id="totalPrice" value="{{ $matCat->totalPrice  }}"  aria-label="Enter your totalPrice " aria-describedby="basic-addon2">
                    @error('totalPrice ')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>






                <input type="submit" value="Update" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/category') }}">Cancel</a>
              </form>

        </div>
    </div>
</div>
@endsection
