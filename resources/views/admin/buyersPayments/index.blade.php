@extends('admin.layout')
@section('ware-title')
BUYERS PAYMENTS
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-md-12 grid-margin">
                        <h2 class="text-center text-success">BUYERS PAYMENTS</h2>
                        <div class="table-responsive">
                            <a href="{{ url('admin/buyersPayments/create') }}" class="btn btn-success btn-sm"
                                title="Add new Customer">
                                Add New
                            </a>
                            <hr class="bg-primary">
                            <br><br>
                            <table id="table" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Buyer ID</th>
                                        <th>buyerName</th>
                                        <th>buyerCode</th>
                                        <th>email</th>
                                        <th>country</th>
                                        <th> Amount</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyersPayments as $buyerPayment)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $buyersPayments->buyerId }}</td>
                                            <td>{{ $buyersPayments->buyerName}}</td>
                                            <td>{{ $buyersPayments->buyerCode}}</td>
                                            <td>{{ $buyersPayments->email}}</td>
                                            <td>{{ $buyersPayments->country}}</td>
                                            <td>{{ $buyersPayments->amount}}</td>



                                            <td class="text-center">
                                                <div class="d-flex content-justify-center">
                                                <a href="{{ url('admin/buyersPayments/' . $assainorder->id) }}"
                                                    class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ url('admin/buyersPayments/' . $assainorder->id . '/edit') }}"
                                                    class="btn btn-success btn-sm me-1"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <form method="post" action="{{ url('admin/buyersPayments/' . $assainorder->id) }}">
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
@endsection
