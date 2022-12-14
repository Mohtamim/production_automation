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

                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_order') }}" method="POST">
                    {!! csrf_field() !!}

                    <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Proformal Invoice
                            </span>
                        <input type="text" id="proformalInvoice" value="{{ old('proformalInvoice') }}" 
                            class="form-control @error('proformalInvoice')
                     is-invalid
                    @enderror"
                            name="proformalInvoice" placeholder="proformalInvoice">
                        @error('proformalInvoice')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Quantity:</span>
                        <input type="number" id="quantity" value="{{ old('quantity') }}" 
                            class="form-control @error('quantity')
                     is-invalid
                    @enderror"
                            name="quantity" placeholder="Enter  quantity" aria-label="Enter  quantity "
                            aria-describedby="basic-addon2">
                        @error('quantity')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                </div>
                <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Pack:</span>
                        <select id="pack"  value="{{ old('pack') }}"  class="form-select" name="pack">
                            <option value="" >Select Package </option>
                            @foreach ($packSize as $packSize )
                            <option value="{{$packSize->id  }}">{{ $packSize->title.' - '.$packSize->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Company
                            </span>
                            <select id="company" value="{{ old('company') }}"  class="form-select " name="company">
                                <option value="" >Select Company Name</option>
                                @foreach ($pack as $pack )
                                <option value="{{$pack->id }}">{{ $pack->companyName.' - '.$pack->id}}</option>
                                @endforeach
                            </select>

                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Price:</span>
                        <input type="number"  id="price" value="{{ old('price') }}" 
                            class="form-control @error('price')
                     is-invalid
                    @enderror"
                            name="price" placeholder="Enter  price" aria-label="Enter  price "
                            aria-describedby="basic-addon2">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Total Cost:</span>
                        <input type="number"  id="totalCost" value="{{ old('totalCost') }}" 
                            class="form-control @error('totalCost')
                     is-invalid
                    @enderror"
                            name="totalCost" placeholder="Enter  totalCost" aria-label="Enter  totalCost "
                            aria-describedby="basic-addon2">
                        @error('totalCost')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row ms-2 me-2">

                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Pay Amount:</span>
                        <input type="number"  id="payAmount" value="{{ old('payAmount') }}" 
                            class="form-control @error('payAmount')
                     is-invalid
                    @enderror"
                            name="payAmount" placeholder="Enter  payAmount" aria-label="Enter  payAmount "
                            aria-describedby="basic-addon2">
                        @error('payAmount')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Note:</span>
                        <input type="text" id="note" value="{{ old('note') }}" 
                            class="form-control @error('note')
                     is-invalid
                    @enderror"
                            name="note" placeholder="Enter  note" aria-label="Enter  note "
                            aria-describedby="basic-addon2">
                        @error('note')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                </div>
                <div class="input-group mb-3 col" >
                <input type="submit" value="save" class="btn btn-success me-1 ">
                <button class="btn btn-secondary">Cancel</button>
            </div>
                </form>

            </div>
        </div>
    </div>
@endsection
