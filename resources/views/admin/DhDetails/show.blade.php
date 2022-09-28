@extends('admin.layout')
@section('ware-title')
DH-Details
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center " >DH DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">

                        <div class="col"
                        <h5 class="card-title">DH Name: {{ $dhDetails->dh_name }}</h5>
                        <p class="card-text">Registered Office: {{ $dhDetails->registered_office }}</p>
                        <p class="card-text">Present Address: {{ $dhDetails->present_address }}</p>
                        <p class="card-text">Telephone : {{ $dhDetails->telephone }}</p>
                        <p class="card-text">Fax: {{ $dhDetails->fax }}</p>
                        <p class="card-text">Email: {{ $dhDetails->email }}</p>
                        <p class="card-text">Website: {{ $dhDetails->website }}</p>
                        <p class="card-text">Logo: {{ $dhDetails->logo }}</p>
                      </div>
                      <div class="col">

                            <div style="float: right;">

                                <div class="card card-text "><img src="{{asset($dhDetails->logo) }}" class="img img-responsive rounded-circle" style="width: 250px; height:250px;" alt=""></div>



                          </div>
                        </div>
                      </div>

            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
