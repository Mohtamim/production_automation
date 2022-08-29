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
                    <h4>ADD Warehouse</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('customer') }}" method="POST">
                {!! csrf_field() !!}
                <div class="mb-3">
                  <label for="warehouseName" class="form-label">Warehouse Name </label>
                  <input type="text" class="form-control" name="warehouseName" placeholder="Warehouse Name">
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label"> Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Address">
                </div>

                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>
        </div>
    </div>
</div>
@endsection
