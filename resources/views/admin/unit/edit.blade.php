@extends('admin.layout')
@section('title')
Unit
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center text-success mt-3 ">EDIT UNIT</h3>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('admin/unit/'.$unit->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                    <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="{{$unit->id}}" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Unit Name</span><br>
                  <input type="text" class="form-control" name="name" id="name"  value="{{ $unit->name }}">

                </div>
                <div class="mb-3">
                    <select id="status" class="form-select" name="status">
                        <option value="" >Select Status</option>
                        @if ($unit->status==1)
                        <option value="1" selected>Active</option>
                        @endif
                        @if ($unit->status==0)
                        <option value="0" selected>Deactive</option>
                        @endif
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>

                <input type="submit" value="save" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/unit') }}">Cancel</a>
              </form>
        </div>
    </div>
</div>
@endsection
