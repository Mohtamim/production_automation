@extends('admin.layout')
@section('title')
BUYERS PAYMENTS
@endsection
@section('admin_content')
    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center "> BUYERS PAYMENTS DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="me" style="width: 60%;float: left;margin-left:50px">



                                    <p class="card-text">Buyer ID: {{ $buyersPayment->buyerId }}</p>
                                    <p class="card-text">Buyer Name: {{ $buyersPayment->buyerName }}</p>
                                    <p class="card-text">Buyer Code: {{ $buyersPayment->buyerCode }}</p>

                                    <p class="card-text">Email: {{ $buyersPayment->email }}</p>
                                    <p class="card-text">Country: {{ $buyersPayment->country }}</p>
                                    <p class="card-text">Amount: {{ $buyersPayment->amount }}</p>

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
