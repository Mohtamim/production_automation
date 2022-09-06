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
                        <h2 class="text-success text-center font-weight-bold mt-3">Edit Warehouse user</h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="widget-content widget-content-area">


                <form class="" action="{{ url('admin/users/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" >First
                                Name:</span>
                            <input type="text" id="firstName" class="form-control @error('firstName')
                             is-invalid
                            @enderror" value="{{ $user->firstName }}" name="firstName"
                               >
                                @error('firstName')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" >Last
                                Name:</span>
                            <input type="text" id="lastName" class="form-control" value="{{ $user->lastName }}" name="lastName"
                               aria-label="Enter your First Name"
                                aria-describedby="basic-addon2">

                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" >User
                                Name:</span>
                            <input type="text" id="userName" class="form-control @error('userName')
                            is-invalid
                        @enderror" value="{{ $user->userName }}" name="userName"
                                aria-label="Enter your First Name"
                                aria-describedby="basic-addon2">
                                @error('userName')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" >Email:</span>
                            <input type="email" id="email" class="form-control @error('email')
                            is-invalid
                            @enderror" value="{{ $user->email }}" name="email"
                                aria-label="Enter your email"
                                aria-describedby="basic-addon2">
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" >Phone:</span>
                            <input type="number" id="phone" class="form-control @error('phone')
                            is-invalid
                            @enderror" value="{{ $user->phone }}" name="phone"
                                aria-label="Enter your Phone Number"
                                aria-describedby="basic-addon2">
                            @error('phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold"
                                >Password:</span>
                            <input type="password" id="password" class="form-control @error('Password')
                            is-invalid
                            @enderror" value="{{ $user->password }} name="password"
                                aria-label="Enter your password Number"
                                aria-describedby="basic-addon2">
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror

                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col" style="minWidth:678px">

                            <select id="userType" class="form-select" name="userType">
                                @if ($user->userType == 1)
                                    <option value="1" selected>Admin</option>
                                    <option value="2">Manager</option>
                                @endif
                                @if ($user->userType == 2)
                                    <option value="1">Admin</option>
                                    <option value="2" selected>Manager</option>
                                @endif



                            </select>
                        </div>
                    </div>
                        @php
                            $randomNum = rand(10000, 999999);
                        @endphp
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" hidden name="userId" value="{{ $randomNum }}"
                                placeholder="Enter your password Number" aria-label="Enter your password Number"
                                aria-describedby="basic-addon2">

                        </div>
                        <div class="row ms-2 me-2">
                            <div class="input-group mb-3">
                        <input type="submit" value="save" class="btn btn-success me-1">
                        <button class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                </form>


            </div>
        </div>
    </div>
@endsection
