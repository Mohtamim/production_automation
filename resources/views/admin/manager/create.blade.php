@extends('admin.layout')
@section('manager-title')
    Manager
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h4>ADD  Manager</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/managers') }}" method="POST">
                {!! csrf_field() !!}

                <div class="mb-3">
                    <label for="managerId" class="control-label">Warehouse Name</label><br>
                <input type="text" name="managerId" id="managerId" class="form-control @error('managerId')
                  is-invalid
                   @enderror">
                   @error('managerId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="managerName" class="control-label">Warehouse Name</label><br>
                <input type="text" name="managerName" id="managerName" class="form-control @error('managerName')
                  is-invalid
                   @enderror">
                   @error('managerName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="phone" class="control-label">Warehouse Name</label><br>
                <input type="text" name="phone" id="phone" class="form-control @error('phone')
                  is-invalid
                   @enderror">
                   @error('phone')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="mb-3">
                    <label for="email" class="control-label">email</label><br>
                <input type="text" name="email" id="email" class="form-control @error('email')
                  is-invalid
                   @enderror" >
                   @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="warehouseId" class="control-label">warehouseId</label><br>
                <input type="text" name="warehouseId" id="warehouseId" class="form-control @error('warehouseId')
                  is-invalid
                   @enderror" >
                   @error('warehouseId')
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
