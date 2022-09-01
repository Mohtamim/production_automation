@extends('admin.layout')
@section('title')
Warehouse Manager
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h4 class="text-center"> Edit Warehouse Manager</h4>

                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/managers/'.$manager->id) }}" method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">managerId:</span>
                        <input type="text" id="managerId" value="{{ $manager->managerId }}"
                            class="form-control @error('managerId')
                     is-invalid
                    @enderror"
                            name="managerId" >
                        @error('managerId')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">managerName
                            </span>
                        <input type="text"  value="{{ $manager->managerName }}" id="managerName"
                            class="form-control @error('managerName')
                    is-invalid
                    @enderror"
                            name="managerName" aria-label="example@gmail.com"
                            aria-describedby="basic-addon2">
                        @error('managerName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Phone:</span>
                        <input type="number" value="{{ $manager->phone }}" id="phone"
                            class="form-control @error('phone')
                     is-invalid
                    @enderror"
                            name="phone"  aria-label="Enter  phone "
                            aria-describedby="basic-addon2">
                        @error('phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Email:</span>
                        <input type="text" value="{{ $manager->email }}" id="email"
                            class="form-control @error('email')
                     is-invalid
                    @enderror"
                            name="email"  aria-label="Enter  email "
                            aria-describedby="basic-addon2">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" >Warehouse Id:</span>
                        <select id="status" class="form-select" name="status">
                            <option value="" >Select Warehouse Name</option>
                            @foreach ($warehouse as $ware )
                            <option value="{{$ware->id  }}">{{ $ware->warehouseName.' - '.$ware->id}}</option>
                            @endforeach


                        </select>
                    </div>
                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
@endsection
