@extends('admin.layout')
@section('title')
Warehouse Supplier
@endsection
@section('admin_content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Warehouse Supplier Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Supplier ID: {{ $suppliers->supplierId }}</h5>
                        <p class="card-text">Warehouse Supplier Name: {{ $suppliers->supplierName }}</p>
                        <p class="card-text">Phone: {{ $suppliers->phone }}</p>
                        <p class="card-text">Email: {{ $suppliers->email }}</p>
                        <p class="card-text">Warehouse Id: {{ $suppliers->warehouseId }}</p>

                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
