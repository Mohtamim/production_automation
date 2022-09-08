
@extends('admin.layout')
@section('title')
Packaging Company
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
<div class="row">
    <div class="col-md-12 grid-margin ">

          <h3 class="text-center text-success font-weight-bold mt-3"> PACKAGING COMPANY</h3>
          <div class="table-responsive">
            <a href="{{url('admin/packaging_company/create')}}" class="btn btn-success btn-sm" title="Add new Customer">
                Add New
            </a>
            <hr>
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                  <th class="text-centeer">SL</th>
                  <th class="text-centeer">Company Name</th>
                  <th class="text-centeer">Email</th>
                  <th class="text-centeer">Contact</th>
                  <th class="text-centeer">Address</th>
                  <th class="text-centeer">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($packCompany as $item)
                  <tr>
                      <td class="text-centeer">{{$loop->iteration}}</td>
                      <td class="text-centeer">{{$item->companyName}}</td>
                      <td class="text-centeer">{{$item->email}}</td>
                      <td class="text-centeer">{{$item->contact}}</td>
                      <td class="text-centeer">{{$item->address}}</td>
                      <td class="text-centeer">
                        <div class="d-flex justify-content-center">
                        <a href="{{url('admin/packaging_company/'.$item->id)}}" class="btn btn-info btn-sm me-1"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{url('admin/packaging_company/'.$item->id.'/edit')}}" class="btn btn-success btn-sm me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form method="post" action="{{url('admin/packaging_company/'.$item->id)}}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field()}}
                            <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
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

