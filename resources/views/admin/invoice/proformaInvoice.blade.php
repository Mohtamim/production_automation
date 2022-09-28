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
        </div>
    </div>
    <div id="printpage">
        <div class="page-content container">

            <div class="page-header text-blue-d2">


                <div class="page-tools">
                    <div class="action-buttons">
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" onclick="printdiv()"
                            data-title="Print">
                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                            Print
                        </a>
                    </div>
                </div>
            </div>

            <div class="container px-0">
                <div class="row mt-4">
                    <hr class="row brc-default-l1 mx-n1 mb-4" />
                        @foreach ($shippings as $shipping)
                                <div class="col-sm-6 p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-sm-3 p-0 m-0">
                                            <div>
                                                <span class="text-primary font-weight-bold" style="font-size: 12px;">
                                                    <p>SHIPPER & EXPORTER</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div>
                                                <span class=" text-blue align-middle font-weight-bold"
                                                    style="font-size: 12px;">
                                                    <p>{{ $shipping->name }}</p>
                                                </span>
                                            </div>
                                            <div class="text-grey-m2">
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline1) !!}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline2) !!}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">
                                                    {{ $shipping->country }}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">Email:
                                                    {{ $shipping->email }}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">website:
                                                    {{ $shipping->website }}
                                                </div>

                                                <div class="my-1" style="font-size: 10px;">{{ $shipping->phone }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @foreach ($shippings as $shipping)
                                <div class="col-sm-6 align-self-start d-sm-flex justify-content-end">
                                    <div class="row p-0 m-0">
                                        <div class="col-sm-3 p-0 m-0">
                                            <div>
                                                <span class="text-primary font-weight-bold p-0 m-0" style="font-size: 12px;">
                                                    <p>SHIPPER & EXPORTER</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div>
                                                <span class=" text-blue align-middle font-weight-bold"
                                                    style="font-size: 12px;">
                                                    <p>{{ $shipping->name }}</p>
                                                </span>
                                            </div>
                                            <div class="text-grey-m2">
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline1) !!}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline2) !!}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">
                                                    {{ $shipping->country }}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">Email:
                                                    {{ $shipping->email }}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">website:
                                                    {{ $shipping->website }}
                                                </div>

                                                <div class="my-1" style="font-size: 10px;">{{ $shipping->phone }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @foreach ($shippings as $shipping)
                                <div class="col-sm-6 p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-sm-3 p-0 m-0">
                                            <div>
                                                <span class="text-primary font-weight-bold" style="font-size: 12px;">
                                                    <p>SHIPPER & EXPORTER</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div>
                                                <span class=" text-blue align-middle font-weight-bold"
                                                    style="font-size: 12px;">
                                                    <p>{{ $shipping->name }}</p>
                                                </span>
                                            </div>
                                            <div class="text-grey-m2">
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline1) !!}
                                                </div>
                                                <div class="my-1" style="font-size: 10px;">
                                                    {!! preg_replace('/,/', '<br/>', $shipping->addressline2) !!}
                                                </div>


                                                <div class="my-1" style="font-size: 10px;">{{ $shipping->phone }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                </div>
            </div>
            <table id="payreport" style=" width: 100%; display: table; "
                                            class="table  table-responsive  multi-table table dt-table-hovertable-striped table-bordered w-100">

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
                                        </table>
        </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">
        function printdiv() {

            document.getElementById("printpage").innerHTML;
            var newstr = document.getElementById("printpage").innerHTML;

            //You can set height width over here
            var popupWin = window.open('', '_blank', 'width=1100,height=600');
            popupWin.document.open();
            popupWin.document.open('<html>');
            popupWin.document.open('<body>');
            popupWin.document.write(newstr);
            popupWin.document.open('</body>');
            popupWin.document.open('</html>');
            popupWin.document.close();
            return false;
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
