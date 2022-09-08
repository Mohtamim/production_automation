@extends('admin.layout')
@section('title')
    Pack Pricing
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-center text-success font-weight-bold mt-2">EDIT PACKAGE PRICE</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_price/'.$packPrice->id) }}" method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Company Name:</span>
                        <input type="text" id="companyName" value="{{ $packPrice->companyName }}"
                            class="form-control @error('companyName')
                     is-invalid
                    @enderror"
                            name="companyName" >
                        @error('companyName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Pack Title
                            </span>
                        <input type="packTitle"  value="{{ $packPrice->packTitle }}" id="packTitle"
                            class="form-control @error('packTitle')
                    is-invalid
                    @enderror"
                            name="packTitle" aria-label="example@gmail.com"
                            aria-describedby="basic-addon2">
                        @error('packTitle')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Pack Sizes:</span>
                        <input type="number" value="{{ $packPrice->packSizes }}" id="packSizes"
                            class="form-control @error('packSizes')
                     is-invalid
                    @enderror"
                            name="packSizes"  aria-label="Enter  packSizes "
                            aria-describedby="basic-addon2">
                        @error('packSizes')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Price:</span>
                        <input type="text" value="{{ $packPrice->price }}" id="price"
                            class="form-control @error('price')
                     is-invalid
                    @enderror"
                            name="price"  aria-label="Enter  price "
                            aria-describedby="basic-addon2">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>

@endsection
