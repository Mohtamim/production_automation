@extends('admin.layout')
@section('title')
Buyers Reports
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
                                    <select class="form-control select2" name="buyerName" id="buyerName1">
                                        <option value="" sid="" selected>Select Buyers Name Or Search</option>
                                        @foreach ($buyers as $item)
                                            <option value="{{ $item->id }}" sid="{{ $item->id }}">
                                                {{ $item->buyerName }}</option>
                                        @endforeach

                                    </select>
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
                                                    <span class="input-group-text bg-light text-black font-weight-bold" >Buyer Name:</span>
                                                    <p id="buyerName" class="form-control"></p>
                                                </div>
                                            </div>
                                            <div  class="col m-1">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-light text-black font-weight-bold" >Buyer Code:</span>
                                                    <p id="buyerCode" class="form-control"></p>
                                                </div>
                                            </div>
                                           </div>
                                            <thead >
                                                <tr>


                                                    <th>Date</th>
                                                    <th>Note</th>
                                                    <th>Amount</th>
                                                    {{-- <th>Image</th> --}}
                                                    <th>Balance</th>
                                                </tr>
                                            </theadstyle=>
                                            <tbody id="content1"  >


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
        $('#buyerName1').change(function() {
            var id = $(this).find('option:selected').attr('sid');
            $("#payreport").find('tbody').empty();
            $('#buyerCode').html('');
            $('#buyerName').html('');
            if (id) {
                $.ajax({
                    url: "{{ url('admin/buyers_reports') }}/" + id,
                    type: "GET",
                    cache: false,
                    dataType: "json",

                    success: function(data) {
                        console.log(data);

                        $.each(data, function(key, value) {
                            // $('#buyerCode').html(value.buyerCode);
                            // $('#buyerName').html(value.buyerName);
                            // $('#email').html(value.email);
                            // $('#phone').html(value.buyer.phone);
                            // $('#note').html(value.note);
                            // $('#date').html(value.paydate);
                            // $('#amount').html(value.amount);
                            // $('#balance').html(value.buyer.balance);
                            // var body = "<tr>";
                            // body    += "<td>" + value.buyerCode + "</td>";
                            // body    += "<td>" + value.buyerName + "</td>";
                            // body    += "<td>" + value.email + "</td>";
                            // body    += "<td>" + value.buyer.phone + "<zzzzz/td>";
                            // body    += "<td>" + value.note + "</td>";
                            // body    += "<td>" + value.paydate + "</td>";
                            // body    += "<td>" + value.amount + "</td>";
                            // body    += "<td>" + value.buyer.balance + "</td>";
                            // body    += "</tr>";
                            // $( "#content1 tbody" ).append(body);




                            $('#content1').append(
                                      `<tr>
                                                        <td > ${value.paydate}</td>
                                                        <td >${value.note}</td>
                                                        <td >${value.amount}</td>
                                                        <td > ${value.buyer.balance}</td>
                                        </tr>`
                            )
                            $('#buyerCode').html(value.buyerCode);
                            $('#buyerName').html(value.buyerName);

                        });



                    }
                })
            }
        })



    </script>
@endsection

