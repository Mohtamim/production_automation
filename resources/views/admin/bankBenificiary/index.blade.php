@extends('admin.layout')
@section('ware-title')
Bank Benificiaries
@endsection
@section('admin_content')
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-12 grid-margin  ">

                    <h3 class="text-center text-success font-weight-bold mt-3">Bank Benificiaries</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/bank_benificiary/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                            Add New
                        </a><br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="dataTable table-responsive text-center multi-table table dt-table-hover"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th> Name</th>
                                            <th>Address Line 1</th>
                                            <th>Address Line 2</th>
                                            <th>Account No</th>
                                            <th>Swift Code</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bank_benificiaries as $bank_benificiaries)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $bank_benificiaries->name }}</td>
                                                <td>{{ $bank_benificiaries->addressline1 }}</td>
                                                <td>{{ $bank_benificiaries->addressline2 }}</td>
                                                <td>{{ $bank_benificiaries->account_no }}</td>
                                                <td>{{ $bank_benificiaries->swift_code }}</td>
                                                @if ($bank_benificiaries->status == 1)
                                                <td class="text-center">Active</td>
                                            @endif
                                            @if ($bank_benificiaries->status == 0)
                                                <td class="text-center">Deactive</td>
                                            @endif

                                            <td class="text-center">

                                                <a href="{{ url('admin/bank_benificiary/' . $bank_benificiaries->id) }}"
                                                    class="btn btn-info btn-sm" title="View customer"
                                                    aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                <a href="{{ url('admin/bank_benificiary/' . $bank_benificiaries->id . '/edit') }}"
                                                    class="btn btn-success btn-sm" title="Edit Customer"
                                                    aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                <form method="POST"
                                                    action="{{ url('admin/bank_benificiary/' . $bank_benificiaries->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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

    </div>
</div>

@endsection
