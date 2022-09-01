@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h4 class="text-center"> Assaign Order</h4>
                        <a href="{{ url('admin/packaging_company') }}" class="btn btn-info text-center justify-content-start my-4">
                            Assaign Order</a>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/packaging_company/'.$packCompany->id) }}" method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" value="{{ $pack->companyName }}" id="companyName">Company Name:</span>
                        <input type="text"
                            class="form-control @error('companyName')
                     is-invalid
                    @enderror"
                            name="companyName" placeholder="Enter a Company name">
                        @error('companyName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" value="{{ $pack->email }}" id="email">email
                            Id:</span>
                        <input type="email"
                            class="form-control @error('email')
                    is-invalid
                    @enderror"
                            name="email" placeholder="example@gmail.com" aria-label="example@gmail.com"
                            aria-describedby="basic-addon2">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" value="{{ $pack->contact }}" id="contact">contact:</span>
                        <input type="number"
                            class="form-control @error('contact')
                     is-invalid
                    @enderror"
                            name="contact" placeholder="+88 xxxxxxx" aria-label="Enter  contact "
                            aria-describedby="basic-addon2">
                        @error('contact')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" value="{{ $pack->address }}" id="address">address:</span>
                        <input type="number"
                            class="form-control @error('address')
                     is-invalid
                    @enderror"
                            name="address" placeholder="ex:1.5x2.5" aria-label="Enter  address "
                            aria-describedby="basic-addon2">
                        @error('address')
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
