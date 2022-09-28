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
                    <h2 class="text-center text-success h2 font-weight-bold mt-3">Proforma Invoice</h2>
                </div>
            </div>
        </div> <hr>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/main_order') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="rowlen" id="rowlen" value="1">
                <input type="hidden" name="porowlen" id="porowlen" value="1">
                {{-- <input type="hidden" name="invoice_id" id="invoice_id" value="1"/> --}}
                {{-- <input type="hidden" name="customer_id" id="customer_id" value="0"/> --}}
                <div class="row mt-3">
                    <div class="form-group text-center col">
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
                    <div class="form-group text-center col">
                            <div class="row">
                                <div class="form-group text-center col">

                                    <button type="button" class="btn btn-sm text-white w-100 bg-info btn-outline-dark font-weight-bold" id="gPI" >Generate DH PI NO.</button>
                                </div>
                                <div class="form-group text-center col">
                                    <input type="text" name="PIN" id="PIN" class="form-control ">

                                </div>
                            </div>
                            </div>


                </div><hr>
                <div class="row mt-1 bg-light"  id="poRowAppend">
                    <div class="col-1">
                        <button type="button" class="btn btn-sm btn-outline-dark" id="RowAdd" onclick="po_row_Append()" style="margin-top: 34px"><i class="fa-solid fa-plus"></i></button>
                        {{-- <button type="button" class="btn btn-sm btn-outline-danger" id="RowDeletesd" style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button> --}}
                    </div><div class="form-group text-center col">
                        <span class="input-group-text bg-light text-black font-weight-bold">P.O. Number:</span>
                        <input type="text" name="pono_id[]" id="pono_id1" class="form-control">
                    </div>
                    <div class="form-group text-center col">
                        <span class="input-group-text bg-light text-black font-weight-bold">Date:</span>
                <input type="date" name="pono_date[]" id="pono_date1" class="form-control @error('delivery_date')
                  is-invalid
                   @enderror" >
                    </div>



                </div>
<hr>
            <div class="row mt-3" id="RowAppend">
                <div class="col-1">
                    <button type="button" class="btn btn-sm btn-outline-dark" id="RowAdd" onclick="row_Append()" style="margin-top: 34px"><i class="fa-solid fa-plus"></i></button>
                    {{-- <button type="button" class="btn btn-sm btn-outline-danger" id="RowDeletesd" style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button> --}}
                </div>
                <div class="col form-group text-center">
                    <label>Buyer Product Code</label>
                    <input type="text" name="bpcode[]" id="bpcode1" class="form-control" placeholder="Enter Buyer Code">
                </div>
                <div class="col form-group text-center">
                    <label>DH Product Code</label>
                    <select  class="form-select  @error('productName')
                    is-invalid
                     @enderror" name="productName[]" id="productName1" onchange="salesAdd(1)">
                        <option value="" >Select Product</option>
                        @foreach ($products as $pro )
                        <option id="{{$pro->id  }}"  value="{{$pro->id  }}">{{ $pro->title}}</option>
                        @endforeach

                    </select>
                    @error('productName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>




                <div class="col form-group text-center">
                    <label >Quantity</label>
                <input type="number" name="quantity[]" id="quantity1" onkeyup="parchaseeCal(1)" class="form-control totalQty @error('quantity')
                  is-invalid
                   @enderror" onkeyup="fetchData()" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="col form-group text-center">
                    <label>Unit Price (USD)</label>
                <input type="number" name="unitPrice[]" id="unitPrice1"  onmousemove="parchaseeCal(1)" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror" onchange="fetchData()">
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="col form-group text-center">
                    <label>Total Price (USD)</label>
                <input type="text" name="totalPrice[]" id="totalPrice1" class="form-control totalCount @error('totalPrice')
                  is-invalid
                   @enderror" >
                   @error('totalPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="form-group col">
                    <label>Grand Total (USD)</label>
                    <input type="number" class="form-control font-weight-bold text-primary bg-white @error('grandTotal') is-invalid

                    @enderror" name="grandTotal[]" id="grandTotal" disabled onkeyup="parchaseeCal()" placeholder="Grand Total" value="{{ old('grandTotal') }}">
                    @error('grandTotal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>

                    </span>
                    @enderror
                </div>
                <div class="form-group col">
                    <label>Total Quantity</label>
                    <input type="number" class="form-control font-weight-bold text-success bg-white" disabled name="totalQuantity[]" id="totalQuantity" onkeyup="parchaseeCal()" placeholder="Total Quantity">
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
function salesAdd(id){
        var optID = $('#productName'+id).find("option:selected").attr('id');
            if (optID) {
                $.ajax({
                    url: "{{ url('admin/product_fetch') }}/"+optID,
                    type: "GET",
                    cache: false,
                    dataType: "json",
                        success: function(data) {
                            console.log(data);
                                $.each(data, function(key, value) {
                                    $('#unitPrice'+id).val(value.FOB_cost);
                                })
                                parchaseeCal(id);
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
        var row='<div class="row mt-3" id="poDelRow'+i+'">'
            row+='<div class="col-1">'
            row+='<button type="button" class="btn btn-sm btn-outline-danger" id="minus" onclick="po_row_Remove('+i+')"  style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button>'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<label>Buyer Product Code</label>'
            row+='<input type="text" name="bpcode[]" id="bpcode'+i+'" class="form-control" placeholder="Enter Buyer Code">'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<label>DH Product Code</label>'
            row+='<select class="form-select select2" name="productName[]" id="productName'+i+'" onchange="salesAdd('+i+')">'
            row+='<option value="1" selected>Select Product</option>'
            row+='@foreach ($products as $product)'
            row+='<option value="{{ $product->id }}" id="{{ $product->id }}">{{ $product->title }}</option>'
            row+='@endforeach'
            row+='</select>'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<label>Quantity</label>'
            row+='<input type="number" class="form-control totalQty" name="quantity[]" id="quantity'+i+'" onkeyup="parchaseeCal('+i+')" placeholder="Quantity">'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<label>Unit Price (USD)</label>'
            row+='<input type="number" class="form-control" name="unitPrice[]" id="unitPrice'+i+'" onmousemove="parchaseeCal('+i+')" placeholder="Unit Price (USD)">'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<label>Total Price</label>'
            row+='<input type="number" class="form-control totalCount" name="totalPrice[]" id="totalPrice'+i+'" placeholder="Total Price">'
            row+='</div>'
            row+='</div>'

        $('#RowAppend').append(row);
        $('#rowlen').val(i);
        i++;

    }
    function po_row_Append(){

        var i=1;
        var rowlength=parseInt($('#porowlen').val());
        i+=rowlength;
        var row='<div class="row mt-3" id="DelRow'+i+'">'
            row+='<div class="col-1">'
            row+='<button type="button" class="btn btn-sm btn-outline-danger" id="minus" onclick="row_Remove('+i+')"  style="margin-top: 34px"><i class="fa-solid fa-minus"></i></button>'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<span class="input-group-text bg-light text-black font-weight-bold">P.O. Number:</span>'
            row+='<input type="text" name="pono_id[]" id="pono_id'+i+'" class="form-control" placeholder="Enter PO Code">'
            row+='</div>'
            row+='<div class="col form-group text-center">'
            row+='<span class="input-group-text bg-light text-black font-weight-bold">Date:</span>'
            row+='<input type="date" name="pono_date[]" id="pono_date'+i+'" class="form-control">'
            row+='</div>'
            row+='</div>'

        $('#poRowAppend').append(row);
        $('#porowlen').val(i);
        i++;

    }
    function row_Remove(id){
        $('#DelRow'+id).remove();
    }
    function parchaseeCal(id){
        var quantity = $('#quantity'+id).val();
        var unitPrice = $('#unitPrice'+id).val();
        var totalPrice = (quantity * unitPrice);
            $('#totalPrice'+id).val(totalPrice);

            var allTotalP = 0;
            $('.totalCount').each(function(){
                var get_valu = $(this).val();
                if($.isNumeric(get_valu)){
                    allTotalP += parseInt(get_valu);
                }
            });
            $('#grandTotal').val(allTotalP);
            var totalQty = 0;
            $('.totalQty').each(function(){
                var get_valu = $(this).val();
                if($.isNumeric(get_valu)){
                    totalQty += parseInt(get_valu);
                }
            });
            $('#totalQuantity').val(totalQty);
    }




$("#gPI").click(function(){
    var currentTime = new Date()
    var month = currentTime.getMonth() + 1;
    var seq = (Math.floor(Math.random() * 10000) + 10000).toString().substring(1);
    if(month >= 7){
        var year = currentTime.getFullYear()
        var year1 = year + 1;
        $('#PIN').val(seq + "-" + year + "-" +year1);

}
    else{
    var year = currentTime.getFullYear()
        var year1 = year - 1;
        $('#PIN').val(seq + "-" + year1 + "-" + year);
    }

});
</script>
@endsection
