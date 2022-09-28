@extends('manager.layout')
@section('ware-title')
WareHose
@endsection
@section('manager_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                    <h4 class="text-center">Supplier Assaign Order</h4>
                </div>

            </div>

        </div>
        <div class="widget-content widget-content-area">



            <table id="table" class="dataTable table dt-table-hover" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>UnitPrice</th>
                        <th>TotalPrice</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mainOrder as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->productName }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->unitPrice }}</td>
                            <td>{{ $item->totalPrice }}</td>
                            @if ($item->status==1)
                            <td>Active</td>
                            @endif

                           @if ($item->status==0)
                            <td>Deactive</td>
                            @endif
                            <td>
                                <button href="#" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"></i>select</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form class="" action="{{ url('manager/supplier-assign-order') }}" method="POST">
                {!! csrf_field() !!}


                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="mainOrderId">Main Order Id:</span>
                    <input type="number" class="form-control @error('mainOrderId')
                     is-invalid
                    @enderror" name="mainOrderId" placeholder="Enter MainOrder Id">
                    @error('mainOrderId')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <select class="form-select" name="uniteType" id="uniteType" aria-label="Default select example">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="mainOrderId">Main Order Id:</span>
                    <option  selected class="form-control">Select The Order</option>
                    @foreach ($mainOrder as $mainOrder)
                    <option value="{{ $mainOrder->id }}">{{ $mainOrder->productName }}</option>
                    @endforeach
                  </select><br>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="warehouseId">Ware House Id:</span>
                    <select id="status" class="form-select" name="status">
                        <option value="" >Select Warehouse Name</option>
                        @foreach ($warehouse as $ware )
                        <option value="{{$ware->id  }}">{{ $ware->warehouseName.' - '.$ware->id}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Quantity:</span>
                    <input type="number" class="form-control @error('quantity')
                     is-invalid
                    @enderror" name="quantity" placeholder="Enter  quantity" aria-label="Enter  quantity " aria-describedby="basic-addon2">
                    @error('quantity')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                    @enderror
                </div>
                <div class="input-group mb-3" style="minWidth:678px">

                    <select id="status" class="form-select" name="status">
                        <option value="" >Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>

                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>

        </div>
    </div>
</div>
@endsection
