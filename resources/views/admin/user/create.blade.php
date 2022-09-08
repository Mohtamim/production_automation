@extends('admin.layout')
@section('ware-title')
    WareHose
@endsection
@section('admin_content')
<div class="container-fluid">
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center text-success h2 font-weight-bold mt-3">ADD USER</h3>
                    </div>
                </div>
            </div>
            <hr class="bg-primary">
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/users') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" id="firstName">First
                                Name:</span>
                            <input type="text"
                                class="form-control @error('firstName')
                             is-invalid
                             @enderror"
                                name="firstName" placeholder="Enter your First Name">
                            @error('firstName')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                            <div class="input-group mb-3 col">

                                <span class="input-group-text bg-light text-black font-weight-bold" id="lastName">Last
                                    Name:</span>
                                <input type="text" class="form-control @error('lastName')
                                    is-invalid
                                @enderror" name="lastName"
                                    placeholder="Enter your Last Name" aria-label="Enter your First Name"
                                    aria-describedby="basic-addon2">
                                    @error('lastName')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                            </div>
                        </div>


                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" id="userName">User
                                Name:</span>
                            <input type="text" class="form-control @error('userName')
                            is-invalid
                        @enderror" name="userName" placeholder="Enter your user Name"
                                aria-label="Enter your First Name" aria-describedby="basic-addon2">
                                @error('userName')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" id="email">Email:</span>
                            <input type="email" class="form-control @error('email')
                            is-invalid
                        @enderror" name="email" placeholder="Enter your Email"
                                aria-label="Enter your email" aria-describedby="basic-addon2">
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                    </div>

                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold" id="phone">Phone:</span>
                            <input type="number" class="form-control @error('phone')
                            is-invalid
                        @enderror" name="phone" placeholder="Enter your Phone Number"
                                aria-label="Enter your Phone Number" aria-describedby="basic-addon2">
                            @error('phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold"
                                id="password">Password:</span>
                            <input type="password" class="form-control @error('password')
                            is-invalid
                        @enderror" value="{{ old('password') }}" name="password"
                                placeholder="Enter your password Number" aria-label="Enter your password Number"
                                aria-describedby="basic-addon2">
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">

                            <select id="userType" class="form-select @error('userType')
                            is-invalid
                        @enderror" name="userType">
                                <option value="">Select User Type</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                                @error('userType')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </select>
                        </div>
                    </div>
                    @php
                        $randomNum = rand(10000, 999999);
                    @endphp
                    <div class="input-group mb-3 col">
                        <input type="number" class="form-control" hidden name="userId" value="{{ $randomNum }}"
                            placeholder="Enter your password Number" aria-label="Enter your password Number"
                            aria-describedby="basic-addon2">

                    </div>
                    <div class="input-group mb-3 col">
                    <input type="submit" value="save" class="btn btn-success me-1">
                    <a class="btn btn-secondary" href="{{ url('admin/users') }}">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
