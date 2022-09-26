@extends('admin.layout')
@section('title')
    Main Order
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h2 class="text-center text-success h2 font-weight-bold mt-3">TAKE ORDER </h2>
                </div>
            </div>
        </div> <hr>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/main_order') }}" method="POST">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    <select class="form-select select2 @error('buyerId')
                    is-invalid
                     @enderror" name="buyerId" >
                        <option value=""  >Select Buyer Name</option>
                        @foreach ($buyers as $buyer )
                        <option  value="{{$buyer->id}}">{{$buyer->buyerName}}</option>
                        @endforeach

                    </select>
                    @error('buyerId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>
            <div class="row">
                <div class="col-1">
                    <button type="button" class="btn btn-sm btn-outline-dark" id="RowAdd" onclick="row_Append()" style="margin-top: 34px"><i class="fa-solid fa-plus"></i></button>
                    {{-- <button type="button" class="btn btn-sm btn-outline-danger" id="RowDeletesd" style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button> --}}
                </div>

                <div class="col text-center">
                    <label>Product Code</label>
                    <select onchange="fetchData1(id)" class="form-select select2 @error('productName')
                    is-invalid
                     @enderror" name="productName" >
                        <option value="" >Select Product</option>
                        @foreach ($product as $pro )
                        <option id="{{$pro->id  }}"  value="{{$pro->id  }}">{{ $pro->title}}</option>
                        @endforeach

                    </select>
                    @error('productName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>




                <div class="col text-center">
                    <label >Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control @error('quantity')
                  is-invalid
                   @enderror" onkeyup="fetchData()" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="col text-center">
                    <label>Unit Price (USD)</label>
                <input type="text" name="unitPrice" id="unitPrice" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror" onchange="fetchData()">
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="col text-center">
                    <label>Total Price (USD)</label>
                <input type="text" name="totalPrice" id="totalPrice" class="form-control @error('totalPrice')
                  is-invalid
                   @enderror" >
                   @error('totalPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Expected Delivery Date:</span><br>
                <input type="date" name="delivery_date" id="delivery_date" class="form-control @error('delivery_date')
                  is-invalid
                   @enderror" >
                   @error('delivery_date')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
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
                <a href="{{ url('admin/main_order') }}" class="btn btn-secondary">Cancel</a>
              </form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    function fetchData() {
        var quantity = $("#quantity").val();
        var unitPrice = $("#unitPrice").val();
        var totalPrice = $("#totalPrice").val();
        // var totalPrice = $("#buyerId").val();

        var result=quantity*unitPrice;
        $('#totalPrice').val(result);

    }
</script>

<script type="text/javascript">
        function fetchData1(id) {
            var oid =  $( "select option:selected" ).val();
         if (oid){

            $.ajax({
                url: "{{ url('admin/product_fetch') }}/" + oid,
                type: "GET",
                cache: false,
                dataType: "json",
                success: function(data) {
                    console.log(data);


                    $.each(data, function(key, value) {
                        $('#unitPrice').val(value.FOB_cost);
                    })

                }
            });

        }

        }
    </script>
<script type="text/javascript">
    $('.select2').select2();
    function row_Append(){
        var i=1;
        var rowlength=parseInt($('#rowlen').val());
        i+=rowlength;
        var row='<div class="row mt-3" id="DelRow'+i+'">'
            row+='<div class="col-1">'
            row+='<button type="button" class="btn btn-sm btn-outline-danger" id="minus" onclick="row_Remove('+i+')"  style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button>'
            row+='</div>'
            row+='<div class="form-group col">'
            row+='<label>Product Name</label>'
            row+='<select class="form-control" name="productID[]" id="productName'+i+'" onchange="salesAdd('+i+')">'
            row+='<option value="1" selected>Select Product</option>'
            row+='@foreach ($productName as $products)'
            row+='<option value="{{ $products->id }}" id="{{ $products->id }}">{{ $products->productName }}</option>'
            row+='@endforeach'
            row+='</select>'
            row+='</div>'
            row+='<div class="form-group col">'
            row+='<label>Product Code</label>'
            row+='<input type="number" class="form-control" name="prodCode[]" id="productCode'+i+'" placeholder="Product Code">'
            row+='</div>'
            row+='<div class="form-group col">'
            row+='<label>Product QTY</label>'
            row+='<input type="number" class="form-control" name="prodQty[]" id="productQty'+i+'" onkeyup="parchaseeCal('+i+')" placeholder="Product QTY">'
            row+='</div>'
            row+='<div class="form-group col">'
            row+='<label>Product Rate</label>'
            row+='<input type="number" class="form-control" name="prodRate[]" id="productRate'+i+'" onkeyup="parchaseeCal('+i+')" placeholder="Product Rate">'
            row+='</div>'
            row+='<div class="form-group col">'
            row+='<label>Total Price</label>'
            row+='<input type="number" class="form-control totalCount" name="totalPrice[]_" id="totalePrice'+i+'" placeholder="Total Price">'
            row+='</div>'
            row+='</div>'

        $('#RowAppend').append(row);
        $('#rowlen').val(i);
        i++;

    }
</script>
@endsection
