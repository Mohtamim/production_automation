@extends('admin.layout')
@section('ware-title')
WareHose
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h3  class="text-center text-success h2 font-weight-bold mt-3" >ADD Warehouse</h3>
                </div>
            </div>
        </div>
        <hr class="bg-primary">
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/warehouses') }}" method="POST">
                {!! csrf_field() !!}

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Warehouse Name</span><br>
                <input type="text" name="warehouseName" value="{{ old('warehouseName') }}" id="warehouseName" class="form-control @error('warehouseName')
                  is-invalid
                   @enderror">
                   @error('warehouseName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Address</span><br>
                <input type="text" name="address" value="{{ old('address') }}" id="address" class="form-control @error('address')
                  is-invalid
                   @enderror" >
                   @error('address')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>




                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/warehouses') }}">Cancel</a>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
