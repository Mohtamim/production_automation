@extends('admin.layout')
@section('ware-title')
assign Order
@endsection
@section('admin_content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Assign Order Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Main Order Id: {{ $assain->mainOrderId }}</h5>
                        <p class="card-text">Ware House Id: {{ $assain->warehouseId }}</p>
                        <p class="card-text">Quantity: {{ $assain->quantity }}</p>
                        <p class="card-text">Status: {{ $assain->status }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
