@extends('admin.layout')
@section('title')
    Product
@endsection
@section('admin_content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center "> BUYERS DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="me" style="width: 60%;float: left;margin-left:50px">



                                    <h5 class="card-text">Buyer Code: {{ $buyers->buyerCode }}</h5>
                                    <p class="card-text">Buyer Name: {{ $buyers->buyerName }}</p>
                                    <p class="card-text">Email: {{ $buyers->email }}</p>
                                    <p class="card-text">Phone: {{ $buyers->phone }}</p>

                                    <p class="card-text">Country: {{ $buyers->country }}</p>

                                  </div>

                            </div>
                            <div class="col">
                                <div style="float: right;">

                                    <div class="card card-text"><img src="{{asset($buyers->img) }}" style="width: 250px; height:250px;" alt=""></div>

                                        <p class="card-text text-center mt-1"> Caption: {{ $buyers->buyerName }}</p>

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
