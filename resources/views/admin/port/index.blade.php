@extends('admin.layout')
@section('title')
Port
@endsection
@section('admin_content')
    <div class="row ">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body">
                    <h2 class="text-center text-success">PORT</h2>
                    <div class="table-responsive">
                        <a href="{{ url('admin/port/create') }}" class="btn btn-success btn-sm" title="Add new port">
                            Add port
                        </a>
                        <hr>
                        <br><br>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="table" class="dataTable table"  cellspacing="0">
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

                                                    <a href="{{url('admin/port/'.$pt->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit port" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                    <form method="POST" action="{{ url('admin/port/' . $pt->id) }}" accept-charset="UTF-8" style="display:inline">
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
    </div>

@endsection
