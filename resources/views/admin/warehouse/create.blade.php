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
                    <h4>ADD Warehouse</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/warehouses') }}" method="POST">
                {!! csrf_field() !!}

                <div class="mb-3">
                    <label for="warehouseName" class="control-label">Warehouse Name</label><br>
                <input type="text" name="warehouseName" value="{{ old('warehouseName') }}" id="warehouseName" class="form-control @error('warehouseName')
                  is-invalid
                   @enderror">
                   @error('warehouseName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="mb-3">
                    <label for="address" class="control-label">Address</label><br>
                <input type="text" name="address" value="{{ old('address') }}" id="address" class="form-control @error('address')
                  is-invalid
                   @enderror" >
                   @error('address')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>




                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
