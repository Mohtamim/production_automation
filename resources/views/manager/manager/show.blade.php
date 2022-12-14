@extends('admin.layout')
@section('title')
Warehouse Manager
@endsection
@section('admin_content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Warehouse Manager Details</h2>
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
