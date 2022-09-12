@extends('admin.layout')
@section('ware-title')
Category
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center h2 text-success font-weight-bold">ADD Category</h3>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/category') }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="catName">Category Name:</span>
                    <input type="text"  value="{{ old('catName') }}" class="form-control @error('catName')
                    is-invalid
                    @enderror" name="catName" placeholder="Enter your Category Name">
              @error('catName')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="catTitle">Category Title:</span>
                    <input type="text"  class="form-control @error('catTitle')
                    is-invalid
                    @enderror" name="catTitle"  value="{{ old('catTitle') }}"  placeholder="Enter your categoryTitle" aria-label="Enter your catTitle" aria-describedby="basic-addon2">
                    @error('catTitle')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>




                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/category') }}">Cancel</a>
              </form>

        </div>
    </div>
</div>
@endsection
