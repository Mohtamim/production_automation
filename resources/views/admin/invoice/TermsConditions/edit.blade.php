@extends('admin.layout')
@section('ware-title')
Category
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-success text-center font-weight-bold mt-3" >EDIT Conditions</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/terms-condition/'.$termsConditions->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Name:</span>
                    <input type="text" class="form-control @error('name')
                    is-invalid
                    @enderror" name="name" id="name" placeholder="Enter your Category Name" value="{{ $termsConditions->name }}" >
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Details:</span>
                    <input type="text" class="form-control" name="details" id="details" value="{{ $termsConditions->details }}"  aria-label="Enter your details" aria-describedby="basic-addon2">
                </div>




                <input type="submit" value="Update" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/terms-condition') }}">Cancel</a>
              </form>

        </div>
    </div>
</div>
</div>
@endsection
