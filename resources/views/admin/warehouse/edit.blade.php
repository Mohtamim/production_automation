@extends('admin.layout')
@section('ware-title')
WareHose
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center text-success h2 font-weight-bold mt-3"  >EDIT WAREHOUSE</h3>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('admin/warehouses/'.$warehouse->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                    <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="{{$warehouse->id}}" />
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text bg-light text-black font-weight-bold">Warehouse Name</span>

                  <input type="text" class="form-control" name="warehouseName" id="warehouseName"  value="{{ $warehouse->warehouseName }}"><br>

                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text bg-light text-black font-weight-bold">Address</span>
                  <input type="text" class="form-control" name="address" id="address" value="{{ $warehouse->address }}">
                </div>

                <input type="submit" value="Update" class="btn btn-success">
                <a class="btn btn-secondary" href="{{ url('admin/warehouses') }}">Cancel</a>
              </form>
        </div>
    </div>
</div>
@endsection
