@extends('admin.layout')
@section('ware-title')
    assign Order
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-md-12 grid-margin">
                        <h2 class="text-center text-success">ASSIGN ORDER</h2>
                        <div class="table-responsive">

                            <div class="row p-3 mb-5">
                                <div class="col">
                                    <a href="{{ url('admin/assaign_order/create') }}" class="btn btn-success btn-sm"
                                title="Add new Customer">
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
                            <br><br>
                            <table id="payreport" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                                <thead>
                                    <tr>

                                        <th class="text-center">SL</th>
                                        <th class="text-center">Main Order Number</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Warehouse Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody  id="content1">
                                    @foreach ($assainorders as $assainorder)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $assainorder->mainOrderId }}</td>
                                            <td class="text-center">{{ $assainorder->products->title }}</td>
                                            <td class="text-center">{{ $assainorder->warehouses->warehouseName }}</td>
                                            <td class="text-center">{{ $assainorder->quantity }}</td>
                                            @if ($assainorder->status == 1)
                                                <td>Active</td>
                                            @endif
                                            @if ($assainorder->status == 0)
                                                <td>Deactive</td>
                                            @endif
                                            @if ($assainorder->status == 2)
                                                <td>Processing</td>
                                            @endif
                                            @if ($assainorder->status == 3)
                                                <td>Completed</td>
                                            @endif
                                            @if ($assainorder->status == 4)
                                                <td>Delivered</td>
                                            @endif
                                            @if ($assainorder->status == 5)
                                                <td>Received</td>
                                            @endif
                                            @if ($assainorder->status == 6)
                                                <td>Approved</td>
                                            @endif
                                            {{-- //  <td class="text-center">
                                                //                     <a href="{{ url('admin/assaign_order/' . $assainorder->id . '/edit') }}"
                                                //                         class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i
                                                //                             class="fa-solid fa-pen-to-square"></i></a>
                                                //                     <form method="POST" action="{{ url('admin/assaign_order/' . $assainorder->id) }}"
                                                //                         accept-charset="UTF-8" style="display:inline">
                                                //                         {{ method_field('DELETE') }}
                                                //                         {{ csrf_field() }}
                                                //                         <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm"
                                                //                             aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                                //                     </form>
                                                //                 </td> --}}

                                            <td class="text-center">
                                                <div class="d-flex content-justify-center">
                                                <a href="{{ url('admin/assaign_order/' . $assainorder->id) }}"
                                                    class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ url('admin/assaign_order/' . $assainorder->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <form method="post" action="{{ url('admin/assaign_order/' . $assainorder->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-info btn-sm me-1 btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
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
                    url: "{{ url('admin/assaign_order_fetch') }}/" + id,
                    type: "GET",
                    cache: false,
                    dataType: "json",

                    success: function(data) {
                        console.log(data);
                        var i=1;
                        $.each(data, function(key, value) {
                             var status =(value.status);
                             if(status==1){
                               var status="Active";
                             }
                             else if(status==0){
                               var status="Deactive";
                             }
                             else if(status==2){
                               var status="Processing";
                             }
                             else if(status==3){
                               var status="Completed";
                             }
                             else if(status==4){
                               var status="Delivered";
                             }
                             else if(status==5){
                               var status="Received";
                             }
                             else if(status==6){
                               var status="Approved";
                             }



                            $('#content1').append(
                                     `<tr>
                                        <td > ${i++}</td>
                                        <td > ${value.mainOrderId}</td>
                                        <td >${value.products.title}</td>
                                        <td >${value.warehouses.warehouseName}</td>
                                        <td >${value.warehouses.warehouseName}</td>
                                        <td > ${status}</td>




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
