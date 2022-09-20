@extends('admin.layout')
@section('ware-title')
Shipping Export
@endsection
@section('admin_content')
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-12 grid-margin  ">

                    <h3 class="text-center text-success font-weight-bold mt-3">SHIPPING EXPORT</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/shiperment_exporter/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
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
                                            <th>Country</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>website</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shiperment_exporter as $shiperment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $shiperment->name }}</td>
                                                <td>{{ $shiperment->addressline1 }}</td>
                                                <td>{{ $shiperment->addressline2 }}</td>
                                                <td>{{ $shiperment->country }}</td>
                                                <td>{{ $shiperment->phone }}</td>
                                                <td>{{ $shiperment->email }}</td>
                                                <td>{{ $shiperment->website }}</td>

                                                @if ($shiperment->status == 1)
                                                <td class="text-center">Active</td>
                                            @endif
                                            @if ($shiperment->status == 0)
                                                <td class="text-center">Deactive</td>
                                            @endif

                                            <td class="text-center">

                                                <a href="{{ url('admin/shiperment_exporter/' . $shiperment->id) }}"
                                                    class="btn btn-info btn-sm" title="View customer"
                                                    aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                <a href="{{ url('admin/shiperment_exporter/' . $shiperment->id . '/edit') }}"
                                                    class="btn btn-success btn-sm" title="Edit Customer"
                                                    aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                <form method="POST"
                                                    action="{{ url('admin/shiperment_exporter/' . $shiperment->id) }}"
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
