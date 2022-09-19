@extends('admin.layout')
@section('title')
Warhouse Reports
@endsection
@section('admin_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <form action="">
                                <div class="form-group">
                                    <select class="form-control select2" name="warehouse" id="orderType" >
                                        <option value="" sid="" selected>Select Order type</option>
                                            <option value="1" sid="1">Main Order</option>
                                            <option value="2" sid="2">Assigned Order</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" id="ordernumber"  placeholder="Order Number..">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">

                                        <table id="payreport" style=" width: 100%; display: table; " class="table dataTable table table-responsive text-center multi-table table dt-table-hovertable-striped table-bordered w-100">
                                           <div class="row">
                                            <div  class="col m-1">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-light text-black font-weight-bold" >Warhouse Name:</span>
                                                    <p id="warehouseName" class="form-control"></p>
                                                </div>
                                            </div>
                                            <div  class="col m-1">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-light text-black font-weight-bold" >Warhouse ID:</span>
                                                    <p id="warehouseId" class="form-control"></p>
                                                </div>
                                            </div>
                                           </div>
                                            <thead >
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Note</th>
                                                    <th>Amount</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody id="content1">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


<script type="text/javascript">

    $(document).ready(function () {
        $("#payreport").DataTable();
        $(".dataTables_empty").empty();
    });
        $('#orderType').change(function result() {
            var id = $(this).find('option:selected').attr('sid');
            // var ordernumber = $("#ordernumber").change(val());
            $("#ordernumber").on("change paste keyup", function() {
                var ordernumber = $("#ordernumber").val();
            });
            ordernumber=1;
alert(ordernumber)

            if (id) {

                $.ajax({
                    url: "{{ url('admin/order_reports') }}/" + id + "/" + ordernumber,
                    type: "GET",
                    cache: false,
                    dataType: "json",

                    success: function(data) {
                        console.log(data);

                        $.each(data, function(key, value) {
                            $('#warehouseId').html(value.id);
                            $('#warehouseName').html(value.warehouse.warehouseName);

                            $('#content1').append(
                                      `<tr>
                                                        <td > ${value.date}</td>
                                                        <td >${value.note}</td>
                                                        <td >${value.amount}</td>
                                                        <td > ${value.balance}</td>
                                        </tr>`
                            )


                        });
                    }
                })
            }else{
            $("#payreport").find('tbody').empty();
            $('#warehouseId').html('');
            $('#warehouseName').html('');
            }
        })

</script>
@endsection

