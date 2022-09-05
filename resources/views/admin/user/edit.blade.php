@extends('admin.layout')
@section('ware-title')
WareHose
@endsection
@section('admin_content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit user</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">


              <form class="" action="{{ url('admin/users/'.$user->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="firstName">First Name:</span>
                    <input type="text" class="form-control" value="{{$user->firstName}}" name="firstName" placeholder="Enter your First Name">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="lastName">Last Name:</span>
                    <input type="text" class="form-control" value="{{$user->lastName}}" name="lastName" placeholder="Enter your Last Name" aria-label="Enter your First Name" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="userName">User Name:</span>
                    <input type="text" class="form-control" value="{{$user->userName}}" name="userName" placeholder="Enter your user Name" aria-label="Enter your First Name" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="email">Email:</span>
                    <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Enter your Email" aria-label="Enter your email" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Phone:</span>
                    <input type="number" class="form-control" value="{{$user->phone}}" name="phone" placeholder="Enter your Phone Number" aria-label="Enter your Phone Number" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="password">Password:</span>
                    <input type="password" class="form-control" value="{{$user->password}} name="password" placeholder="Enter your password Number" aria-label="Enter your password Number" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3" style="minWidth:678px">

                    <select id="userType" class="form-select" name="userType">
                        @if (($user->userType)==1)
                            <option value="1" selected>Admin</option>
                            <option value="2">Manager</option>
                        @endif
                        @if (($user->userType)==2)
                            <option value="1">Admin</option>
                            <option value="2" selected>Manager</option>

                        @endif



                    </select>
                </div>
                @php
                    $randomNum = rand(10000, 999999);
                @endphp
                <div class="input-group mb-3">
                    <input type="number" class="form-control" hidden name="userId" value="{{ $randomNum }}" placeholder="Enter your password Number" aria-label="Enter your password Number" aria-describedby="basic-addon2">

                </div>

                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>


        </div>
    </div>
</div>
@endsection
