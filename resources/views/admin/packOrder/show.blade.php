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
                        <h5 class="card-title">Proformal Invoice: {{ $pack->proformalInvoice }}</h5>
                        <p class="card-text">Company: {{ $pack->company }}</p>
                        <p class="card-text">Pack: {{ $pack->pack }}</p>
                        <p class="card-text">Price: {{ $pack->price }}</p>
                        <p class="card-text">Quantity: {{ $pack->quantity }}</p>
                        <p class="card-text">TotalCost: {{ $pack->totalCost }}</p>
                        <p class="card-text">PayAmount: {{ $pack->payAmount }}</p>
                        <p class="card-text">Note: {{ $pack->note }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
