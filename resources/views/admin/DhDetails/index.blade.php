@extends('admin.layout')
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-md-12 grid-margin">
                    <h2 class="text-center text-success">DH DETAILS</h2>
                    <div class="table-responsive">
                        <a href="{{ route('admin.dh-details.create') }}" class="btn btn-success btn-sm"
                            title="Add new Customer">
                            Add DH Details
                        </a>
                        <hr class="bg-primary">
                        <br><br>
                        <table id="table" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                            <thead>
                                <tr>

                                    <th class="text-center">SL</th>
                                    <th class="text-center">DH Name</th>
                                    <th class="text-center">Registered Office</th>
                                    <th class="text-center">Present Address</th>
                                    <th class="text-center">Telephone</th>
                                    <th class="text-center">Fax</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Website</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dhDetails as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->dh_name }}</td>
                                        <td class="text-center">{{ $item->registered_office }}</td>
                                        <td class="text-center">{{ $item->present_address }}</td>
                                        <td class="text-center">{{ $item->telephone }}</td>
                                        <td class="text-center">{{ $item->fax }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        <td class="text-center">{{ $item->website }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($item->logo) }}" width= '100' height='100' class="img img-responsive rounded-circle" />
                                        </td>

                                        <td class="text-center">
                                            <div class="d-flex content-justify-center ms-5">
                                                <a href="{{ url('admin/dh-details/' . $item->id) }}"
                                                    class="btn btn-info btn-sm me-1" title="View customer"
                                                    aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                <a href="{{url('admin/dh-details/'.$item->id.'/edit')}}" class="btn btn-success btn-sm me-1" title="Edit Customer" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                            <form method="post" action="{{url('admin/dh-details/'.$item->id) }}">
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
