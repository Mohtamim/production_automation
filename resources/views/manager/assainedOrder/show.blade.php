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
                        @foreach ($orders as $order)
                        <h5 class="card-title font-weight-bold text-black">Order Id: {{ $order->mainOrderId }}</h5>
                        <p class="card-text font-weight-bold text-black">Product Name: {{$order->products->title }}</p>
                        <p class="card-text font-weight-bold text-black">Quantity: {{ $order->quantity }}</p>
                        @endforeach

                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
