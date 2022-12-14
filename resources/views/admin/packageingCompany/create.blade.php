@extends('admin.layout')
@section('title')
    Packageing Company
@endsection
@section('admin_content')
<div class="container mt-5">
    <div class="col-lg-12 col-12">

        <div class="widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                        <h2 class="text-center text-success h2 font-weight-bold mt-3">ADD PACKAGING COMPANY </h2>
                    </div>
                </div>
            </div> <hr>
            <div class="widget-content widget-content-area ">
                <form class="" action="{{ url('admin/packaging_company') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="companyName">Company Name
                            </span>
                        <input type="text"
                            class="form-control @error('companyName')
                     is-invalid
                    @enderror"
                            name="companyName" value="{{ old('companyName') }}"  placeholder="Enter Company Name">
                        @error('companyName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="email">Email
                            </span>
                        <input type="text"
                            class="form-control @error('email')
                    is-invalid
                    @enderror"
                            name="email" value="{{ old('email') }}"  placeholder="Enter email" aria-label="Enter your Assign Order Id"
                            aria-describedby="basic-addon2">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="contact">Contact:</span>
                        <input type="number"
                            class="form-control @error('contact')
                     is-invalid
                    @enderror"
                            name="contact" value="{{ old('contact') }}"   placeholder="Enter  contact" aria-label="Enter  contact "
                            aria-describedby="basic-addon2">
                        @error('contact')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="address">Address:</span>
                        <input type="text"
                            class="form-control @error('address')
                     is-invalid
                    @enderror"
                            name="address" value="{{ old('address') }}"  placeholder="Enter  address" aria-label="Enter  address "
                            aria-describedby="basic-addon2">
                        @error('address')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <input type="submit" value="save" class="btn btn-success">
                    <a href="{{ url('admin/packaging_company') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
@endsection
