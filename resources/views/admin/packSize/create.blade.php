@extends('admin.layout')
@section('ware-title')
    pack Size
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-center text-success font-weight-bold mt-2">ADD PACKAGE SIZE</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_size') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="title">Pack Name
                            Id:</span>
                        <input type="text" value="{{ old('title') }}"
                            class="form-control @error('title')
                     is-invalid
                    @enderror"
                            name="title" placeholder="Enter Pack Title">
                        @error('title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="length">Length
                            Id:</span>
                        <input type="number" value="{{ old('length') }}"
                            class="form-control @error('length')
                    is-invalid
                    @enderror"
                            name="length" placeholder="ex:25x2.5" aria-label="Enter "
                            aria-describedby="basic-addon2">
                        @error('length')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="phone">width:</span>
                        <input type="number" value="{{ old('width') }}"
                            class="form-control @error('width')
                     is-invalid
                    @enderror"
                            name="width" placeholder="ex:25x2.5" aria-label="Enter  width "
                            aria-describedby="basic-addon2">
                        @error('width')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Height:</span>
                        <input type="number" value="{{ old('height') }}"
                            class="form-control @error('height')
                     is-invalid
                    @enderror"
                            name="height" placeholder="ex:25x2.5" aria-label="Enter  height "
                            aria-describedby="basic-addon2">
                        @error('height')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <input type="submit" value="save" class="btn btn-success">
                    <a href="{{ url('admin/pack_size') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
@endsection
