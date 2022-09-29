@extends('admin.layout')
@section('title')
Terms Conditions
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center h2 text-success font-weight-bold">Create Conditions</h3>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/terms-condition') }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="name">Name:</span>
                    <input type="text"  value="{{ old('name') }}" class="form-control @error('name')
                    is-invalid
                    @enderror" name="name" placeholder="Enter your Conditions">
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Details:</span>
                    <input type="text" class="form-control" id="Details" name="details"  value="{{ old('Details') }}"  placeholder="Enter your Details" aria-label="Enter your details" aria-describedby="basic-addon2">

                </div>




                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/terms-condition') }}">Cancel</a>
              </form>

        </div>
    </div>
</div>
</div>
@endsection
