@extends('admin.layout')
@section('title')
    Packaging Company
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-center text-success font-weight-bold mt-2">EDIT PACKAGING COMPANY</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/packaging_company/'.$packCompany->id) }}" method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Company Name:</span>
                        <input type="text" id="companyName" value="{{ $packCompany->companyName }}"
                            class="form-control @error('companyName')
                     is-invalid
                    @enderror"
                            name="companyName" >
                        @error('companyName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Email
                            </span>
                        <input type="email"  value="{{ $packCompany->email }}" id="email"
                            class="form-control @error('email')
                    is-invalid
                    @enderror"
                            name="email" aria-label="example@gmail.com"
                            aria-describedby="basic-addon2">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Contact:</span>
                        <input type="number" value="{{ $packCompany->contact }}" id="contact"
                            class="form-control @error('contact')
                     is-invalid
                    @enderror"
                            name="contact"  aria-label="Enter  contact "
                            aria-describedby="basic-addon2">
                        @error('contact')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Address:</span>
                        <input type="text" value="{{ $packCompany->address }}" id="address"
                            class="form-control @error('address')
                     is-invalid
                    @enderror"
                            name="address"  aria-label="Enter  address "
                            aria-describedby="basic-addon2">
                        @error('address')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <input type="submit" value="Update" class="btn btn-success">
                    <a href="{{ url('admin/packaging_company') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
@endsection
