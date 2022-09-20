@extends('admin.layout')
@section('ware-title')
Bank Benificiaries
@endsection
@section('admin_content')
<div class="container mt-5">
    <div class="col-lg-12 col-12">

        <div class="widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                        <h2 class="text-success text-center font-weight-bold mt-3">ADD Bank Benificiaries</h2>
                    </div>
                </div>
            </div><hr>
            <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('admin/bank_benificiary') }}" method="POST">
                {!! csrf_field() !!}
                <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Name: </span><br>
                <input type="text" name="name" id="name" class="form-control @error('name')
                  is-invalid
                   @enderror">
                   @error('name')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Address Line 1:</span><br>
                <input type="text" name="addressline1" id="addressline1" class="form-control @error('addressline1')
                  is-invalid
                   @enderror" >
                   @error('addressline1')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                </div>
                <div class="row ms-2 me-2">

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Address Line 2:</span><br>
                <input type="text" name="addressline2" id="addressline2" class="form-control @error('addressline2')
                  is-invalid
                   @enderror" >
                   @error('addressline2')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Account No:</span><br>
                <input type="text" name="account_no" id="account_no" class="form-control @error('account_no')
                  is-invalid
                   @enderror" >
                   @error('account_no')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                </div>
                <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Swift Code: </span><br>
                <input type="text" name="swift_code" id="swift_code" class="form-control @error('swift_code')
                  is-invalid
                   @enderror" >
                   @error('swift_code')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3 col" style="minWidth:678px">
                    <select id="status"  value="{{ old('status') }}" class="form-select" name="status">
                        <option value="" >Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>

                </div>
                </div>


                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/bank_benificiary') }}">Cancel</a>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
