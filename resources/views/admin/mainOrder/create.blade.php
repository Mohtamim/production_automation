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

                <div class="input-group mb-3">
                    <select onchange="fetchData1(id)" class="form-select select2 @error('buyerId')
                    is-invalid
                     @enderror" name="buyerId" >
                        <option value="" >Select Buyer Name</option>
                        @foreach ($buyers as $buyer )
                        <option id="{{$buyer->id  }}"  value="{{$buyer->id  }}">{{ $buyer->buyerName}}</option>
                        @endforeach

                    </select>
                    @error('buyerId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror
                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Quantity</span><br>
                <input type="text" name="quantity" id="quantity" class="form-control @error('quantity')
                  is-invalid
                   @enderror" onkeyup="fetchData()" >
                   @error('quantity')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Unit Price(USD)</span><br>
                <input type="text" name="unitPrice" id="unitPrice" class="form-control @error('unitPrice')
                  is-invalid
                   @enderror" onchange="fetchData()">
                   @error('unitPrice')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold">Total Price(USD)</span><br>
                <input type="text" name="totalPrice" id="totalPrice" class="form-control @error('totalPrice')
                  is-invalid
                   @enderror" >
                   @error('totalPrice')
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
        var totalPrice = $("#buyerId").val();

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
</script>
@endsection
