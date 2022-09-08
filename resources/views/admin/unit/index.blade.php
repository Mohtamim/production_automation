@extends('admin.layout')
@section('title')
    Unit
@endsection
@section('admin_content')
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row ">
            <div class="col-md-12 grid-margin stretch-card ">
                <h2 class="text-center text-success ">UNIT</h2>
                <div class="table-responsive">
                    <a href="{{ url('admin/unit/create') }}"class="btn btn-success btn-sm" title="Add new Unit">
                        Add Unit
                    </a>
                    <hr>

                    <table id="table" class="table dt-table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center"> Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unit as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    @if ($item->status == 1)
                                        <td class="text-center">Active</td>
                                    @endif
                                    @if ($item->status == 0)
                                        <td class="text-center">Deactive</td>
                                    @endif


                                    <td class="text-center">
                                        <a href="{{ url('admin/unit/' . $item->id . '/edit') }}" class="btn btn-success btn-sm"
                                            title="Edit Unit" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                        <form method="POST" action="{{ url('admin/unit/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" id="{{ $item->id }}"
                                                class="btn btn-danger btn-sm delete-confirm" title="Delete unit"><i
                                                    class="fa-solid fa-trash"></i></button>
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
@endsection
