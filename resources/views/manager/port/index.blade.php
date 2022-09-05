@extends('admin.layout')
@section('title')
Port
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h3 class="text-center text-success">Port</h3>
                    <div class="table-responsive">
                        <a href="{{ url('admin/port/create') }}" class="btn btn-success btn-sm" title="Add new port">
                            Add port
                        </a><br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="table dt-table-hover"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th> Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($port as $pt)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>{{$pt->name }}</td>
                                                @if ($pt->status==1)
                                                <td>Active</td>
                                                @endif
                                                @if($pt->status==0)
                                                <td>Deactive</td>
                                                @endif


                                                <td>
                                                    <a href="{{url('admin/port/'.$pt->id)}}" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/port/'.$pt->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit port" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                    <form method="POST" action="{{ url('admin/port/' . $pt->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete port" onclick="return confirm("Confirm delete?")"><i class="fa-solid fa-toggle-on"></i></button>
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
    </div>

@endsection
