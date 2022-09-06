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
                        <h2> Product Details</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="me" style="width: 60%;float: left;margin-left:50px">
                                    <h5 class="card-title">Title: {{ $product->title }}</h5>
                                    <p class="card-text">Category: {{ $product->category }}</p>

                                    <p class="card-text">Unit: {{ $product->unit }}</p>
                                    <p class="card-text">DH Materials Cost: {{ $product->DH_raw_materials }}</p>
                                    <p class="card-text">Warehouse Material Cost: {{ $product->supplier_raw_materials }}</p>
                                    <p class="card-text">Wages: {{ $product->wages }}</p>
                                    <p class="card-text">Carring charge: {{ $product->carring_charge }}</p>
                                    <p class="card-text">Treatement Cost: {{ $product->treatement_deduction }}</p>
                                    <p class="card-text">Is sample product? {{ $product->is_sample_product }}</p>
                                    <p class="card-text">Details: {{ $product->Details }}</p>
                                    <p class="card-text">Notes: {{ $product->notes }}</p>
                                    <p class="card-text">Warehouse Total Cost: {{ $product->warehouseId }}</p>
                                    <p class="card-text">DH Total Cost: {{ $product->DH_total_price }}</p>

                                  </div>

                            </div>
                            <div class="col">
                                <div style="float: right;">
                                    <p class="card-text"><img src="{{ asset($product->img ) }}" style="width: 250px; height:250px;" alt=""></p>
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
