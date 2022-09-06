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
                    <h4 class="text-center">Edit Category</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/category/'.$cat->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Category Name:</span>
                    <input type="text" class="form-control @error('catName')
                    is-invalid
                    @enderror" name="catName" id="catName" placeholder="Enter your Category Name" value="{{ $cat->catName }}" >
              @error('catName')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror

                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Category Title:</span>
                    <input type="text" class="form-control @error('catTitle')
                    is-invalid
                    @enderror" name="catTitle" id="catTitle" placeholder="Enter your categoryTitle" value="{{ $cat->catTitle }}"  aria-label="Enter your catTitle" aria-describedby="basic-addon2">
                    @error('catTitle')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

               @enderror
                </div>




                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>

        </div>
    </div>
</div>
@endsection
