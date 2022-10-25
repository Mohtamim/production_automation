@extends('admin.layout')
@section('title')
    Proforma Invoice
@endsection
@section('admin_content')
    <div class="container">
        <div class="row ml-2 me-2">

            <div class="col-4">
                <div class="form-group">
                    <form action="">
                        <div class="form-group">
                            <input type="text" id="pinumber" placeholder="P.I Number..">
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

            <div class="col-4 d-flex justify-content-end">

                <div class="page-tools justify-content-end">
                    <div class="action-buttons justify-content-end">
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" onclick="printdiv()"
                            data-title="Print">
                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2 justify-content-end"></i>
                            Print
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="printpage" class="page-content container">
            <div class="row mt-4">
                    <hr class="row brc-default-l1 mx-n1 mb-4" />
                    @foreach ($shippings as $shipping)
                        <div class="col-sm-6 p-0 m-0">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div>
                                        <span class="text-primary font-weight-bold p-0 m-0" style="font-size: 10px;">
                                            <p>SHIPPER & EXPORTER</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-3 p-0 m-0">
                                    <div class="my-1" style="font-size: 10px;">
                                        <p class="font-weight-bold p-0 m-0">{{ $shipping->name}}</p>
                                        <p class=" p-0 m-0">{!! preg_replace('/,/', '<br/>', $shipping->addressline1) !!}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{!! preg_replace('/,/', '<br/>', $shipping->addressline2) !!}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $shipping->country }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" > {{ $shipping->email }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $shipping->website }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $shipping->phone }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach
                        <div class="col-6">
                            <div class="row p-0 m-0">
                                <div class="col-sm-3 d-flex justify-content-start">
                                    <div>
                                        <span class="text-primary font-weight-bold" style="font-size: 10px;">
                                            <p>CONSIGNEE/BUYER</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-flex justify-content-end">
                                    <div class="">
                                        <div class="my-1" style="font-size: 10px;">
                                            <p class="font-weight-bold" id="buyerName"></p>
                                            <p class="" style="font-size: 10px;" id="buyerAddress"></p>
                                            <p class="" style="font-size: 10px;" id="country"></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
            <div class="row">
                    @foreach ($banks as $bank)
                        <div class="col-sm-6 p-0 m-0">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div>
                                        <span class="text-primary font-weight-bold p-0 m-0" style="font-size: 10px;">
                                            <p>BENIFICIARY BANK</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-3 p-0 m-0">
                                    <div class="my-1" style="font-size: 10px;">
                                        <p class="font-weight-bold p-0 m-0">{{ $bank->name }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $bank->addressline1 }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $bank->addressline2 }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $bank->swift_code }}</p>
                                        <p class="p-0 m-0" style="font-size: 10px;" >{{ $bank->account_no }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach
                        <div class="col-6">
                            <div class="row p-0 m-0">
                                <div class="col-3 d-flex justify-content-start">
                                    <div>
                                        <span style="font-size: 10px;">
                                            <p>CONSIGNEE/BUYER</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-3 d-flex justify-content">
                                    <div class="" style="font-size: 10px;" >
                                        <p class="font-weight-bold p-0 m-0" id="buyerName"></p>
                                        <p class="p-0 m-0" id="buyerAddress"></p>
                                        <p class="p-0 m-0" id="country"></p>
                                    </div>

                                </div>
                            </div>
                        </div>

            </div>
                <table id="payreport" style=" width: 100%; display: table; "
                    class="table  table-responsive mt-3  multi-table table dt-table-hovertable-striped table-bordered w-100">

                    <thead>
                        <tr>
                            <th style="font-size: 14px;">Buyer Article No.</th>
                            <th style="font-size: 14px;">DH. ARTICLE NO.</th>
                            <th style="font-size: 14px;">DESCRIPTION OF GOODS</th>
                            <th style="font-size: 14px;">QUANTITY</th>
                            <th style="font-size: 14px;">UNIT PRICE</th>
                            <th style="font-size: 14px;">TOTAL AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody id="content1">

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" id="bagCharge">Absormatic Bag Charges:</td>
                            <td id="bagChargeAmount"></td>
                        </tr>
                        <tr>
                            <td colspan="5" id="bagCharge">Fumigates Charges:</td>
                            <td id="bagChargeAmount"></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="container container-fluid">
                    <div class="row">

                    </div>
                <div class="row">
                    @foreach ($terms as $term )
                    <div class="row" style="font-size: 10px;">
                        <div class="col">
                           <span> {{ $loop->iteration . '. ' }}</span> <span class="font-weight-bold p-0 m-0">{{ $term->name . ':' }}</span><span class=" p-0 m-0">{{ $term->details }}</span>
                        </div>

                    </div>
                    @endforeach
                    <p>@numberToWord(85648521)</p>
                </div>
            </div>

    </div>



    <script type="text/javascript">
        function printdiv() {
            var printContents = document.getElementById('printpage').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search1").click(function() {
                var id = $("#pinumber").val();

                if (id) {
                    $("#payreport").find('tbody').empty();

                    $.ajax({
                        url: "{{ url('admin/poroforma-invoice') }}/" + id,
                        type: "GET",
                        cache: false,
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            $.each(data, function(key, value) {


                                $('#content1').append(
                                    `<tr>
                                        <td>${value.buyerProductCode}</td>
                                        <td>${value.products.title}</td>
                                        <td>${value.products.Details}</td>
                                        <td>${value.quantity}${value.products.unit}</td>
                                        <td>${value.unitPrice}</td>
                                        <td>${value.totalPrice}</td>
                                    </tr>
                            `
                                )

                                $("#buyerName").html(value.buyers.buyerName);
                                $("#buyerAddress").html(value.buyers.buyerAddress);
                                $("#country").html(value.buyers.country);

                            });

                        }
                    })
                } else {
                    $("#payreport").find('tbody').empty();
                }

            });
        });
    </script>
@endsection
