@extends('admin.layout')
@section('title')
    Pack Pricing
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h4 class="text-center"> Pack Pricing</h4>
                        {{-- <a href="{{ url('admin/packaging_company') }}" class="btn btn-info text-center justify-content-start my-4">
                            packaging Company</a> --}}
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/pack_price') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class=" input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="companyName">Company Name:</span>


                        <select class="form-select form-control select2" id="companyName" name="companyName">
                            <option value="" >Select Packaging Company</option>
                            @foreach ($companyName as  $compN)
                            <option value="{{ $compN->id }}">{{ $compN->companyName }}</option>
                            @endforeach

                          </select>

                </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="packTitle">Pack Title
                            </span>
                        <input type="text"
                            class="form-control @error('packTitle')
                    is-invalid
                    @enderror"
                            name="packTitle" placeholder="Enter packTitle" aria-label="Enter your Assign Order Id"
                            aria-describedby="basic-addon2">
                        @error('packTitle')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="packSizes">Pack Sizes:</span>
                        <input type="number"
                            class="form-control @error('packSizes')
                     is-invalid
                    @enderror"
                            name="packSizes" placeholder="ex:1.4x2.7" aria-label="Enter  packSizes "
                            aria-describedby="basic-addon2">
                        @error('packSizes')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold" id="price">Price:</span>
                        <input type="number"
                            class="form-control @error('price')
                     is-invalid
                    @enderror"
                            name="price" placeholder="ex:1000000" aria-label="Enter  price "
                            aria-describedby="basic-addon2">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <input type="submit" value="save" class="btn btn-success">
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        $('.select2').select2();
    </script>
@endsection
