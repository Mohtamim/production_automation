@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h2 class=" text-center text-center mt-2">ASSIGN ORDER</h2>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <table id="table" class="table dt-table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Remaing for Assiagn</th>
                            <th class="text-center">UnitPrice</th>
                            <th class="text-center">TotalPrice</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>{{ $i=0 }}
                        @foreach ($mainorders as $mainorder)
                        @if (($mainorder->remaing_quantity>0))
                        @if ( ($mainorder->status != 0))
                         <tr>
                            <td class="text-center">{{ $i+=1 }}</td>
                            <td class="text-center">{{ $mainorder->products->title }}</td>
                            <td class="text-center">{{ $mainorder->remaing_quantity }}</td>
                            <td class="text-center">{{ $mainorder->unitPrice }}</td>
                            <td class="text-center">{{ $mainorder->totalPrice }}</td>
                            @if ($mainorder->status == 1)
                                <td class="text-center">Active</td>
                            @endif

                            @if ($mainorder->status == 0)
                                <td class="text-center">Deactive</td>
                            @endif
                            <td class="text-center">
                                <button id="{{ $mainorder->id }}" onclick="fetchData(id)"
                                    class="btn btn-info btn-sm">select</button>
                                {{-- <button type="button" id="{{  $mainorder->id }}" onclick="fetchData(id)" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"></i>select</button> --}}
                            </td>
                        </tr>
                        @endif
                        @endif
                        @endforeach
                    </tbody>
                </table>

                <form id="save_data" class="" action="{{ url('admin/assaign_order') }}" method="POST">
                    {!! csrf_field() !!}


                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Main Order Id:</span>
                        <input type="number" id="mainOrderId"
                            class="form-control @error('mainOrderId')
                     is-invalid
                    @enderror"
                            name="mainOrderId" placeholder="Enter MainOrder Id">
                        @error('mainOrderId')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Product Name:</span>
                        <input type="text" id="productId"
                            class="form-control @error('productId')
                     is-invalid
                    @enderror"
                            name="productId" placeholder="Enter a Product Name">
                        @error('productId')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                        <input type="text" id="productName"
                            class="form-control " name="productName" placeholder="Enter a Product Name" hidden>



                    <div class="input-group mb-3">

                        <select id="warehouseId" value="{{ old('warehouseId') }}" class="form-select form-control @error('warehouseId')
                        is-invalid
                        @enderror select2" name="warehouseId">
                            <option value="">Select Warehouse Name</option>
                            @foreach ($warehouse as $ware)
                                <option value="{{ $ware->id }}">{{ $ware->warehouseName }}</option>
                            @endforeach

                        </select>
                        @error('warehouseId')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
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
                    <div class="input-group mb-3" style="minWidth:678px">

                        <select id="status" value="{{ old('status') }}" class="form-select @error('status')
                        is-invalid
                        @enderror" name="status">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        function fetchData(id) {
            var oid = id;
         if (oid){

            $.ajax({
                url: "{{ url('admin/main_order') }}/" + oid,
                type: "GET",
                cache: false,
                dataType: "json",
                success: function(data) {
                    console.log(data);


                    $.each(data, function(key, value) {
                        $('#mainOrderId').val(value.id);
                        $('#productName').val(value.productId);
                        $('#productId').val(value.products.title);
                        $('#quantity').val(value.remaing_quantity);
                    })

                }
            });

        }

        }
    </script>
@endsection
