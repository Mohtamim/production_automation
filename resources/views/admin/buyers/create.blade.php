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
                    <h4>ADD Buyers</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/buyers') }}" method="POST">
                {!! csrf_field() !!}

                <div class="mb-3">
                    <label for="buyerCode" class="control-label">Buyer Code </label><br>
                <input type="number" name="buyerCode" id="buyerCode" class="form-control @error('buyerCode')
                  is-invalid
                   @enderror">
                   @error('buyerCode')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="mb-3">
                    <label for="buyerName" class="control-label">Buyer Name</label><br>
                <input type="text" name="buyerName" id="buyerName" class="form-control @error('buyerName')
                  is-invalid
                   @enderror" >
                   @error('buyerName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="email" class="control-label">Email</label><br>
                <input type="text" name="email" id="email" class="form-control @error('email')
                  is-invalid
                   @enderror" >
                   @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>

                <div class="mb-3">
                    <label for="phone" class="control-label">Phone</label><br>
                <input type="text" name="phone" id="phone" class="form-control @error('phone')
                  is-invalid
                   @enderror" >
                   @error('phone')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="mb-3">
                    <label for="img" class="control-label">img</label><br>
                <input type="file" name="img" id="img" class="form-control @error('img')
                  is-invalid
                   @enderror" >
                   @error('img')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>

                <div class="mb-3">
                    <label for="country" class="control-label">country</label><br>
                <input type="text" name="country" id="country" class="form-control @error('country')
                  is-invalid
                   @enderror" >
                   @error('country')
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
