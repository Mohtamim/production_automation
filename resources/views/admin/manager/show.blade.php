@extends('admin.layout')
@section('title')
Warehouse Manager
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center text-success h2 font-weight-bold mt-3">WAREHOUSE MANAGER DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Manager ID: {{ $manager->managerId }}</h5>
                        <p class="card-text">Warehouse Manager Name: {{ $manager->managerName }}</p>
                        <p class="card-text">Phone: {{ $manager->phone }}</p>
                        <p class="card-text">Email: {{ $manager->email }}</p>
                        <p class="card-text">Warehouse Id: {{ $manager->warehouseId }}</p>

                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
