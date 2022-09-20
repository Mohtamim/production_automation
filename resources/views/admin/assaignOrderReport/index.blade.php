@extends('admin.layout')
@section('title')
    Warhouse Reports
@endsection
@section('admin_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row ml-2 me-2">
                    {{-- <div class="col-4">
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
                    </div> --}}
                    <div class="col-4">
                        <div class="form-group">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" id="ordernumber" placeholder="Order Number..">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <form action="">
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" id="search1" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- /# row -->
                <section id="main-content">
                    <div class="row ml-2 me-2">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">

                                        <table id="payreport" style=" width: 100%; display: table; "
                                            class="table  table-responsive  multi-table table dt-table-hovertable-striped table-bordered w-100">

                                            {{-- <thead>
                                                <tr>
                                                    <th>Processing Date</th>
                                                    <th>Completed Date</th>
                                                    <th>Delivered Date</th>
                                                    <th>Received Date</th>
                                                    <th>Approved Date</th>
                                                    <th>Delivery Quantity</th>
                                                    <th>Remaining for delivery</th>
                                                    <th>Partial Delivery Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead> --}}
                                            <tbody id="content1" >

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
        $(document).ready(function() {
            $("#search1").click(function() {
                var id = $("#ordernumber").val();

            if (id) {
                $("#payreport").find('tbody').empty();

                $.ajax({
                    url: "{{ url('admin/assaign_order_reports') }}/" + id,
                    type: "GET",
                    cache: false,
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $.each(data, function(key, value) {


                            $('#content1').append(
                                `
                                <div class="row ml-2 me-2 ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Order ID:</span>
                                                        <p id="orderId" class="form-control text-primary font-weight-bold ">${value.id}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Main Order Id:</span>
                                                        <p id="buyerName" class="form-control text-primary font-weight-bold ">${value.mainOrderId}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Ordered Quantity:</span>
                                                        <p id="orderedQuantity" class="form-control text-primary font-weight-bold ">${value.quantity}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Warhouse Unit Cost:</span>
                                                        <p id="unitPrice" class="form-control text-primary font-weight-bold ">${value.products.totalcost_for_warehouse}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Total Price:</span>
                                                        <p id="totalPrice" class="form-control text-primary font-weight-bold ">${value.quantity * value.products.totalcost_for_warehouse}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Expected Delivery Date:</span>
                                                        <p id="warehouseId" class="form-control text-primary font-weight-bold ">${value.delivery_date}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Processing Date:</span>
                                                        <p id="totalPrice" class="form-control text-primary font-weight-bold ">${value.processing}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Completed Date:</span>
                                                        <p id="warehouseId" class="form-control text-primary font-weight-bold ">${value.completed}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Delivered Date:</span>
                                                        <p id="totalPrice" class="form-control text-primary font-weight-bold ">${value.delivered}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Received Date:</span>
                                                        <p id="warehouseId" class="form-control text-primary font-weight-bold ">${value.received}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Approved Date:</span>
                                                        <p id="totalPrice" class="form-control text-primary font-weight-bold ">${value.approved}</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Delivery Quantity:</span>
                                                        <p id="warehouseId" class="form-control text-primary font-weight-bold ">${value.partial_delivery_quantity}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 me-2">
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Remaining for delivery:</span>
                                                        <p id="totalPrice" class="form-control text-primary"> need to work for remian quantity</p>
                                                    </div>
                                                </div>
                                                <div class="col m-1">

                                                    <div class="input-group mb-3">
                                                        <span
                                                            class="input-group-text bg-light text-black font-weight-bold">Partial Delivery Amount:</span>
                                                        <p id="warehouseId" class="form-control text-primary font-weight-bold ">${value.partial_delivery_amount}</p>
                                                    </div>
                                                </div>
                                            </div>
                                `
                            )


                        });

                    }
                })
            }else{
                $("#payreport").find('tbody').empty();
            }

        });
        });
    </script>
@endsection
