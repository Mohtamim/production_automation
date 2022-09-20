@extends('admin.layout')
@section('title')
SHIPPING EXPORT
@endsection
@section('admin_content')
    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center "> SHIPPING EXPORT DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="me" style="width: 60%;float: left;margin-left:50px">



                                    <p class="card-text">Name: {{ $shiperment_exporter->name }}</p>
                                    <p class="card-text">Address Line 1: {{ $shiperment_exporter->addressline1 }}</p>
                                    <p class="card-text">Address Line 2: {{ $shiperment_exporter->addressline2 }}</p>
                                     <p class="card-text">Country: {{ $shiperment_exporter->country }}</p>
                                    <p class="card-text">Phone: {{ $shiperment_exporter->phone }}</p>
                                    <p class="card-text">Email: {{ $shiperment_exporter->email }}</p>
                                    <p class="card-text">Website: {{ $shiperment_exporter->website }}</p>

                                  </div>

                            </div>

                        </div>
                      </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
