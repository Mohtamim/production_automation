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
                        <h4 class="text-center text-success"> Pack Order</h4>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_order/'.$packorder->id) }}" method="POST">
                    {!! csrf_field() !!}
                      @method('PATCH')
                    <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Proformal Invoice
                            </span>
                        <input type="text" id="proformalInvoice"
                            class="form-control @error('proformalInvoice')
                     is-invalid
                    @enderror"
                            name="proformalInvoice" value="{{ $packorder->proformalInvoice }}" placeholder="proformalInvoice">
                        @error('proformalInvoice')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Company
                            </span>
                        <input type="text" id="company"
                            class="form-control @error('company')
                    is-invalid
                    @enderror"
                            name="company" value="{{ $packorder->company }}" aria-label="Enter your company"
                            aria-describedby="basic-addon2">
                        @error('company')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Pack:</span>
                        <input type="text"  id="pack"
                            class="form-control @error('pack')
                     is-invalid
                    @enderror"
                            name="pack" value="{{ $packorder->pack }}" aria-label="Enter Pack name "
                            aria-describedby="basic-addon2">
                        @error('pack')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Price:</span>
                        <input type="number"  id="price"
                            class="form-control @error('price')
                     is-invalid
                    @enderror"
                            name="price" value="{{ $packorder->price }}" aria-label="Enter  price "
                            aria-describedby="basic-addon2">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Quantity:</span>
                        <input type="number" id="quantity"
                            class="form-control @error('quantity')
                     is-invalid
                    @enderror"
                            name="quantity" value="{{ $packorder->quantity }}" aria-label="Enter  quantity "
                            aria-describedby="basic-addon2">
                        @error('quantity')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Total Cost:</span>
                        <input type="number"  id="totalCost"
                            class="form-control @error('totalCost')
                     is-invalid
                    @enderror"
                            name="totalCost" value="{{ $packorder->totalCost }}" aria-label="Enter  totalCost "
                            aria-describedby="basic-addon2">
                        @error('totalCost')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="row ms-2 me-2"> --}}

                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Pay Amount:</span>
                        <input type="number"  id="payAmount"
                            class="form-control @error('payAmount')
                     is-invalid
                    @enderror"
                            name="payAmount" value="{{ $packorder->payAmount }}" aria-label="Enter  payAmount "
                            aria-describedby="basic-addon2">
                        @error('payAmount')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Note:</span>
                        <textarea id="note" value="{{ $packorder->note }}"
                            class="form-control @error('note')
                     is-invalid
                    @enderror"
                            name="note" placeholder="Enter  note" aria-label="Enter  note "
                            aria-describedby="basic-addon2"></textarea>
                        @error('note')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                {{-- </div> --}}


                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
@endsection
