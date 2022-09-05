@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
    <div class="row ">


            <h3 class="text-center text-success">Warehouse</h3>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <a href="{{ url('admin/users/create') }}" class="btn btn-success btn-sm" title="Add new Customer">
                    Add New
                </a><br><br>
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area">
                        <table id="table" class="table table-responsive text-center multi-table table dt-table-hover" style="width:100%">
                            <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>User Type</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->firstName }}</td>
                                        <td>{{ $item->lastName }}</td>
                                        <td>{{ $item->userName }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ md5($item->password )}}</td>
                                        <td>{{ $item->userType }}</td>


                                        <td>
                                          <div class="d-flex justify-content-center ">
                                            <a href="{{ url('admin/users/' . $item->id . '/edit') }}"
                                                class="btn btn-info btn-sm btn-success me-1" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <form method="POST" action="{{ url('admin/users/' . $item->id) }}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-info btn-sm btn-danger" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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
@endsection
