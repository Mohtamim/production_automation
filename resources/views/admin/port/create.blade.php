@extends('admin.layout')
@section('title')
Port
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h2 class="text-success text-center">ADD PORT</h2>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/port') }}" method="POST">
                {!! csrf_field() !!}

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Port Name</span><br>
                <input type="text" name="name" value="{{ old('name') }}"  id="name" class="form-control @error('name')
                  is-invalid
                   @enderror">
                   @error('name')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>


                <div class="input-group mb-3" style="minWidth:678px">
                    <select id="status"   class="form-select" name="status">
                        <option value="" >Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>

                </div>



                <input type="submit" value="save" class="btn btn-success">
                <a href="{{ url('admin/port') }}" class="btn btn-secondary">Cancel</a>
              </form>
        </div>
    </div>
</div>
</div>
@endsection
