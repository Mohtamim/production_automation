@extends('admin.layout')
@section('ware-title')
assign Order
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center ">Packaging Company Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Company Name: {{ $packageingCompany->companyName }}</h5>
                        <p class="card-text">Email: {{ $packageingCompany->email }}</p>
                        <p class="card-text">Contact: {{ $packageingCompany->contact }}</p>
                        <p class="card-text">Address: {{ $packageingCompany->address }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
