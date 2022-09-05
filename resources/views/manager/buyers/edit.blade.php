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
                    <h4>Edit Buyers</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/buyers/'.$buyer->id) }}" method="POST">
                @method('PATCH')
                {!! csrf_field() !!}
                <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Buyer Code </span><br>
                <input type="number" value="{{ $buyer->buyerCode }}" name="buyerCode" id="buyerCode" class="form-control @error('buyerCode')
                  is-invalid
                   @enderror">
                   @error('buyerCode')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Buyer Name</span><br>
                <input type="text" name="buyerName" id="buyerName" value="{{ $buyer->buyerName }}" class="form-control @error('buyerName')
                  is-invalid
                   @enderror" >
                   @error('buyerName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Email</span><br>
                <input type="text" name="email" value="{{ $buyer->email }}" id="email" class="form-control @error('email')
                  is-invalid
                   @enderror" >
                   @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Phone</span><br>
                <input type="text" name="phone" id="phone" value="{{ $buyer->phone }}" class="form-control @error('phone')
                  is-invalid
                   @enderror" >
                   @error('phone')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">img</span><br>
                <input type="file" name="img" id="img" value="{{ $buyer->img }}"  class="form-control @error('img')
                  is-invalid
                   @enderror" >
                   @error('img')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">country</span><br>
                <input type="file" name="country" id="country" value="{{ $buyer->country
                 }}" class="form-control @error('country')
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
