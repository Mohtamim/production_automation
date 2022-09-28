@extends('admin.layout')
@section('ware-title')
DH-Details
@endsection
@section('admin_content')
<div class="container-fluid shadow mt-5" >
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h2 class=" text-center text-center mt-2">New Details</h2>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form id="save_data" class="" action="{{ url('admin/dh-details') }}" method="POST"  enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">DH Name:</span>
                        <input type="text" id="dh_name"
                            class="form-control @error('dh_name')
                     is-invalid
                    @enderror"
                            name="dh_name" placeholder="Enter Company name">
                        @error('dh_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Registered Office:</span>
                        <input type="text" id="registered_office"
                            class="form-control @error('registered_office')
                     is-invalid
                    @enderror"
                            name="registered_office" placeholder="Enter Registered_Office name">
                        @error('registered_office')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Present Address:</span>
                        <input type="text" id="present_address"
                            class="form-control @error('present_address')
                     is-invalid
                    @enderror"
                            name="present_address" placeholder="Enter Present Address">
                        @error('present_address')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Telephone:</span>
                        <input type="text" id="telephone"
                            class="form-control @error('telephone')
                     is-invalid
                    @enderror"
                            name="telephone" placeholder="Enter Telephone">
                        @error('telephone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Fax:</span>
                        <input type="text" id="fax"
                            class="form-control @error('fax')
                     is-invalid
                    @enderror"
                            name="fax" placeholder="Enter fax">
                        @error('fax')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Email:</span>
                        <input type="text" id="email"
                            class="form-control @error('email')
                     is-invalid
                    @enderror"
                            name="email" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Website:</span>
                        <input type="text" id="website"
                            class="form-control @error('website')
                     is-invalid
                    @enderror"
                            name="website" placeholder="Enter website">
                        @error('website')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Website:</span>
                        <input type="file" id="logo"
                            class="form-control @error('logo')
                     is-invalid
                    @enderror"
                            name="logo" placeholder="Enter logo">
                        @error('logo')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3 mt-3">
                    <input type="submit" value="save" class="btn btn-success m-1">
                    <button class="btn btn-secondary m-1" href="{{ url('admin/dh-details') }}">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

@endsection
