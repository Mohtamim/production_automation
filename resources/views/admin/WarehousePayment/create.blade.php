@extends('admin.layout')
@section('title')
WareHose-Payment
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h2 class="text-success text-center font-weight-bold mt-3">ADD BUYERS</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/warehousePayments') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    {{-- <span class="input-group-text bg-light text-black font-weight-bold">Manager Name: </span><br> --}}
                <select type="text" name="managerName" id="managerName" class="form-control @error('managerName')
                  is-invalid
                   @enderror">
                   <option for="">select Manager Name</option>
                   <option for="">select Manager Name</option>

                </select>
                   @error('managerName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Manager ID: </span><br>
                <input type="text" name="managerId" value="{{ old('managerId') }}" id="managerId" class="form-control @error('managerId')
                  is-invalid
                   @enderror" >
                   @error('managerId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Email: </span><br>
                <input type="text" name="email" value="{{ old('email') }}"   id="email" class="form-control @error('email')
                  is-invalid
                   @enderror" >
                   @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Phone: </span><br>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}"  class="form-control @error('phone')
                  is-invalid
                   @enderror" >
                   @error('phone')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">WarehouseName: </span><br>
                <input type="text" name="warehouseName" id="warehouseName" value="{{ old('warehouseName') }}"  class="form-control @error('warehouseName')
                  is-invalid
                   @enderror" >
                   @error('warehouseName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Amount: </span><br>
                <input type="number" name="amount" id="amount" value="{{ old('amount') }}"  class="form-control @error('amount')
                  is-invalid
                   @enderror" >
                   @error('amount')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Date: </span><br>
                <input type="date" name="date" id="date" value="{{ old('date') }}"  class="form-control @error('date')
                  is-invalid
                   @enderror" >
                   @error('date')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>


                <div class="row  me-2">
                <div class="input-group mb-3 col">
                    <input type="submit" value="save" class="btn btn-success me-1">
                    <a class="btn btn-secondary" href="{{ url('admin/warehousePayments') }}">Cancel</a>
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
</div>
<script>
    $('.select2').select2();
</script>
@endsection
