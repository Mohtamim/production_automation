@extends('admin.layout')

@section('ware-title')
    BUYERS PAYMENTS
@endsection

@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center h2 text-success font-weight-bold">ADD BUYERS PAYMENTS</h3>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/buyers-payments') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        {{-- <span class="input-group-text bg-light text-black font-weight-bold">Buyer Id:</span> --}}
                        <input type="hidden"  value="{{ old('buyerName') }}" class="form-control " name="buyerName"  id="buyerName" placeholder="Enter your Buyer Id">

                    </div>

                    <div class="input-group mb-3">
                        {{-- <span class="input-group-text bg-light text-black font-weight-bold">Buyer Name:</span> --}}
                        <select type="text"  class="form-control"

                        name="buyerId"  id="buyerId" value="{{ old('buyerId') }}"   aria-label="Enter your buyerName" aria-describedby="basic-addon2">
                        <option value="">select Buyer</option>
                        @foreach ($buyerName as $buyerName)
                        <option value="{{ $buyerName->id }}">{{ $buyerName->buyerName }}</option>
                    @endforeach
                        </select>

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Buyer Code:</span>
                        <input type="number"  class="form-control @error('buyerCode')
                        is-invalid
                        @enderror" name="buyerCode" id="buyerCode" value="{{ old('buyerCode') }}"  placeholder="Enter your Buyer Code" aria-label="Enter your buyerCode" aria-describedby="basic-addon2">
                        @error('buyerCode')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Email:</span>
                        <input type="text"  class="form-control @error( "email")
                        is-invalid
                        @enderror" name= "email"  id= "email"  value="{{ old( "email") }}"  placeholder="Enter your Email" aria-label="Enter your email" aria-describedby="basic-addon2">
                        @error("email")
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

                @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Country:</span>
                        <input type="text"  class="form-control @error( "country")
                        is-invalid
                        @enderror" name= "country"  id= "country"  value="{{ old( "country") }}"  placeholder="Enter your country" aria-label="Enter your country" aria-describedby="basic-addon2">
                        @error("country")
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

                @enderror
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Amount:</span>
                        <input type="number"  class="form-control @error('amount')
                        is-invalid
                        @enderror" name="amount" id="amount"  value="{{ old('amount') }}"  placeholder="BDT:10,0000" aria-label="Enter your amount" aria-describedby="basic-addon2">
                        @error('amount')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Payment Note:</span>
                        <textarea type="text"  class="form-control" name="note" id="note"  value="{{ old('note') }}"  placeholder="Check/ Cash" aria-label="Enter your amount" aria-describedby="basic-addon2"></textarea>
                        @error('amount')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>

                        @enderror
                    </div>



                    <input type="submit" value="save" class="btn btn-success">
                    <a class="btn btn-secondary" href="{{ url('admin/buyers-payments') }}">Cancel</a>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#buyerId").change(function() {
            // var buyerId = $('#buyerId').find("option:selected").attr('value');
            var buyerId = $(this).find("option:selected").val();
            if (buyerId) {
                $.ajax({
                    url: "{{ url('admin/buyers-payments') }}/" + buyerId,
                    type: "GET",
                    cache: false,
                    dataType: "json",
                    success: function(data) {
                        $('#buyerName').val(data.buyerName);
                        $('#buyerCode').val(data.buyerCode);
                        $('#email').val(data.email);
                        $('#country').val(data.country);
                    }
                });
            } else {
                $('#buyerName').val('');
                $('#buyerCode').val('');
                $('#email').val('');
                $('#country').val('');
            }
        });
    </script>
@endsection
