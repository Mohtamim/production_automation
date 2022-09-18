@extends('admin.layout')
@section('title')
WareHose-Payment
@endsection
@section('admin_content')
<div class="container mt-5">
<div class="col-lg-12 col-12">

    <div class="widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
                    <h2 class="text-success text-center font-weight-bold mt-3">ADD Warehouse Payments</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area ">
            <form class="forms-sample" action="{{ url('admin/warehouse_payments') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="input-group mb-3">
                    {{-- <span class="input-group-text bg-light text-black font-weight-bold">Manager ID: </span><br> --}}
                <input type="hidden" name="managerName" value="{{ old('managerName') }}" id="managerName" class="form-control
                 " >

                </div>
                <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    {{-- <span class="input-group-text bg-light text-black font-weight-bold">Manager Name: </span><br> --}}
                <select type="text" name="managerId" id="managerId" class="form-control @error('managerId')
                  is-invalid
                   @enderror">
                   <option value="">select Manager Name</option>
                   @foreach ( $managers as $manager )
                   <option value="{{$manager->managerId}}" id="{{$manager->managerId}}">{{ $manager->managerName }}</option>
                   @endforeach


                </select>
                   @error('managerId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">WarehouseName: </span><br>
                <input type="text" name="warehouseId" id="warehouseId" value="{{ old('warehouseId') }}"  class="form-control @error('warehouseId')
                  is-invalid
                   @enderror" >
                   @error('warehouseId')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                      <input type="hidden" name="warehouseName" id="warehouseName" value="{{ old('warehouseName') }}"  class="form-control" >

            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Email: </span><br>
                <input type="text" name="email" value="{{ old('email') }}"   id="email" class="form-control @error('email')
                  is-invalid
                   @enderror" >
                   @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
            </div>

            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Amount: </span><br>
                <input type="number" name="amount" id="amount" value="{{ old('amount') }}"  class="form-control @error('amount')
                  is-invalid
                   @enderror" >
                   @error('amount')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                   @enderror

                </div>
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Date: </span><br>
                <input type="date" name="date" id="date" value="{{ old('date') }}"  class="form-control @error('date')
                  is-invalid
                   @enderror" >
                   @error('date')
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
            </div>


                <div class="row  me-2">
                <div class="input-group mb-3 col">
                    <input type="submit" value="save" class="btn btn-success me-1">
                    <a class="btn btn-secondary" href="{{ url('admin/warehousePayments') }}">Cancel</a>
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
$("#managerId").change(function() {
    var managerId = $(this).find("option:selected").val();
    // alert(managerId)
         if (managerId) {
             $.ajax({
                 url: "{{ url('admin/warehouse_payments') }}/" + managerId,
                 type: "GET",
                 cache: false,
                 dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $.each(data, function(key, value) {
                            $('#warehouseId').val(value.warehouse.warehouseName);
                            $('#email').val(value.email);
                            $('#warehouseName').val(value.warehouseId);
                            $('#managerName').val(value.managerName);
                        });

                         }
                     });
                 }
                 else{
                    $('#warehouseName').val('');
                    $('#email').val('');
                 }
    });
</script>
@endsection
