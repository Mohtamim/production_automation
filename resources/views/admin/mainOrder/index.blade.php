@extends('admin.layout')
@section('title')
    Main Order
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row ">
            <div class="col-md-12 grid-margin ">
                <h2 class="text-center text-success mt-2">MAIN ORDER</h2>

                <div class="">
                    <div class="row p-3 mb-5">
                        <div class="col">
                            <a href="{{ url('admin/main_order/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                                Add New
                            </a>

                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <select class="form-select select2" name="status11" id="status11" >
                                <option value="10"  sid="10">All</option>
                                <option value="1"  sid="1">Active</option>
                                <option value="2"  sid="2">Processing</option>
                                <option value="3"  sid="3">Completed</option>
                                <option value="4"  sid="4" >Delivered</option>
                                <option value="5"  sid="5">Received</option>
                                <option value="6"  sid="6">Approved</option>

                            </select>
                        </div>
                    </div>
                    <hr class="bg-primary">


                    <table id="payreport" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100"
                        style="white-space: nowrap; text-overflow:ellipsis;">
                        <thead>
                            <tr>
                                <th class="text-center">SL</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Buyer Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Remain for Assaign</th>
                                <th class="text-center">Unit Price</th>
                                <th class="text-center">Total Price</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="content1">
                            @foreach ($mainorders as $mainorder)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $mainorder->products->title }}</td>
                                    <td class="text-center">{{ $mainorder->buyers->buyerName }}</td>
                                    <td class="text-center">{{ $mainorder->quantity }}</td>
                                    <td class="text-center">{{ $mainorder->remaing_quantity }}</td>
                                    <td class="text-center">{{ $mainorder->unitPrice }}</td>
                                    <td class="text-center">{{ $mainorder->totalPrice }}</td>

                                    @if ($mainorder->status == 1)
                                                <td>Active</td>
                                    @endif
                                    @if ($mainorder->status == 0)
                                        <td>Deactive</td>
                                    @endif
                                    @if ($mainorder->status == 2)
                                        <td>Processing</td>
                                    @endif
                                    @if ($mainorder->status == 3)
                                        <td>Completed</td>
                                    @endif
                                    @if ($mainorder->status == 4)
                                        <td>Delivered</td>
                                    @endif
                                    @if ($mainorder->status == 5)
                                        <td>Received</td>
                                    @endif
                                    @if ($mainorder->status == 6)
                                        <td>Approved</td>
                                    @endif
                                    <td class="text-center">
                                        <a href="{{ url('admin/main_order/' . $mainorder->id . '/edit') }}"
                                            class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form method="POST" action="{{ url('admin/main_order/' . $mainorder->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm"
                                                aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

$(document).ready(function () {
    $("#payreport").DataTable();
    $(".dataTables_empty").empty();
});

$('#status11').change(function() {
    var id = $(this).find('option:selected').attr('sid');
    if (id) {
        $("#payreport").find('tbody').empty();
        $.ajax({
            url: "{{ url('admin/order_fetch') }}/" + id,
            type: "GET",
            cache: false,
            dataType: "json",

            success: function(data) {
                console.log(data);
                var i=1;
                $.each(data, function(key, value) {

                    $('#content1').append(


                             `<tr>
                                <td > ${i++}</td>
                                <td > ${value.products.title}</td>
                                <td >${value.buyers.buyerName}</td>
                                <td >${value.quantity}</td>
                                <td > ${value.remaing_quantity}</td>
                                <td > ${value.unitPrice}</td>
                                <td > ${value.totalPrice}</td>
                                <td > ${value.status}</td>
                                
                             </tr>`
                    )


                });
            }
        })
    }else{
    $("#payreport").find('tbody').empty();
    // $('#warehouseId').html('');
    // $('#warehouseName').html('');
    }
})



            </script>
@endsection
