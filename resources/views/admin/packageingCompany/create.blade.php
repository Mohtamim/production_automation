@extends('admin.layout')
@section('title')
    Packageing Company
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h4 class="text-center"> Assaign Order</h4>
                        <a href="{{ url('admin/pack_size') }}" class="btn btn-info text-center justify-content-start my-4">
                            Assaign Order</a>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_size') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="title">Pack Name
                            Id:</span>
                        <input type="text"
                            class="form-control @error('title')
                     is-invalid
                    @enderror"
                            name="title" placeholder="Enter MainOrder Id">
                        @error('title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="length">Length
                            Id:</span>
                        <input type="number"
                            class="form-control @error('length')
                    is-invalid
                    @enderror"
                            name="length" placeholder="Enter length" aria-label="Enter your Assign Order Id"
                            aria-describedby="basic-addon2">
                        @error('length')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="phone">width:</span>
                        <input type="number"
                            class="form-control @error('width')
                     is-invalid
                    @enderror"
                            name="width" placeholder="Enter  width" aria-label="Enter  width "
                            aria-describedby="basic-addon2">
                        @error('width')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Height:</span>
                        <input type="number"
                            class="form-control @error('height')
                     is-invalid
                    @enderror"
                            name="height" placeholder="Enter  height" aria-label="Enter  height "
                            aria-describedby="basic-addon2">
                        @error('height')
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
