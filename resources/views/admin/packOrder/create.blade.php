@extends('admin.layout')
@section('title')
Pack Order
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h4 class="text-center"> Pack Order</h4>
                        <a href="{{ url('admin/pack_order') }}" class="btn btn-info text-center justify-content-start my-4">
                            Pack Order</a>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_order') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="proformalInvoice">Proformal Invoice
                            </span>
                        <input type="text"
                            class="form-control @error('proformalInvoice')
                     is-invalid
                    @enderror"
                            name="proformalInvoice" placeholder="Enter proformalInvoice">
                        @error('proformalInvoice')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="company">Company
                            </span>
                        <input type="text"
                            class="form-control @error('company')
                    is-invalid
                    @enderror"
                            name="company" placeholder="Enter company" aria-label="Enter your company"
                            aria-describedby="basic-addon2">
                        @error('company')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="pack">Pack:</span>
                        <input type="number"
                            class="form-control @error('pack')
                     is-invalid
                    @enderror"
                            name="pack" placeholder="Enter  pack" aria-label="Enter  pack "
                            aria-describedby="basic-addon2">
                        @error('pack')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="price">Price:</span>
                        <input type="text"
                            class="form-control @error('price')
                     is-invalid
                    @enderror"
                            name="price" placeholder="Enter  price" aria-label="Enter  price "
                            aria-describedby="basic-addon2">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="quantity">Quantity:</span>
                        <input type="text"
                            class="form-control @error('quantity')
                     is-invalid
                    @enderror"
                            name="quantity" placeholder="Enter  quantity" aria-label="Enter  quantity "
                            aria-describedby="basic-addon2">
                        @error('quantity')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="totalCost">Total Cost:</span>
                        <input type="text"
                            class="form-control @error('totalCost')
                     is-invalid
                    @enderror"
                            name="totalCost" placeholder="Enter  totalCost" aria-label="Enter  totalCost "
                            aria-describedby="basic-addon2">
                        @error('totalCost')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="payAmount">Pay Amount:</span>
                        <input type="text"
                            class="form-control @error('payAmount')
                     is-invalid
                    @enderror"
                            name="payAmount" placeholder="Enter  payAmount" aria-label="Enter  payAmount "
                            aria-describedby="basic-addon2">
                        @error('payAmount')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="note">Note:</span>
                        <input type="text"
                            class="form-control @error('note')
                     is-invalid
                    @enderror"
                            name="note" placeholder="Enter  note" aria-label="Enter  note "
                            aria-describedby="basic-addon2">
                        @error('note')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
@endsection
