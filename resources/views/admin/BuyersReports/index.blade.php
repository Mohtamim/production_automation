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
                                        <option value="" selected>Select Buyers Name Or Search</option>
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

                                        <table id="" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Buyer Code</th>
                                                    <th>Buyer Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    {{-- <th>Image</th> --}}
                                                    <th>Country</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    <tr>
                                                        <td id="buyerCode"></td>
                                                        <td id="buyerName"> </td>
                                                        <td id="email"> </td>
                                                        <td id="phone" ></td>
                                                        {{-- <td><img src="{{asset($item->img) }}" style="width: 50px; height:50px;" alt=""></td> --}}
                                                        <td id="country"> </td>
                                                        <td id="balance"> </td>
                                                    </tr>


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


    <script>

        $('#buyerName1').change(function() {
            var id = $(this).find('option:selected').attr('sid');
            if (id) {
                $.ajax({
                    url: "{{ url('admin/buyers_reports') }}/" + id,
                    type: "GET",
                    cache: false,
                    dataType: "json",

                    success: function(data) {
                        console.log(data);

                        $.each(data, function(key, value) {
                            $('#buyerCode').html(value.buyerCode);
                            $('#buyerName').html(value.buyerName);
                            $('#email').html(value.email);
                            $('#phone').html(value.phone);
                            $('#country').html(value.country);

                          $('#balance').html(value.balance);
                        })
                    }
                })
            }
        })
    </script>
@endsection

