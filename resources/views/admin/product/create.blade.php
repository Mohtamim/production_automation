@extends('admin.layout')
@section('ware-title')
    Product
@endsection
@section('admin_content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h2 class="text-center text-success font-weight-blod mt-2">ADD PRODUCT</h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="widget-content widget-content-area">
                <form class="" action="{{ url('admin/product') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="row ms-2 me-2">
                        <div class=" input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Product Code:</span>
                            <input type="text" id="title"
                                class="form-control @error('title')
                     is-invalid
                    @enderror"
                                name="title" value="{{ old('title') }}" placeholder="Product Name">
                            @error('title')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class=" input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Image:</span>
                            <input type="file"
                                class="form-control @error('img')
                     is-invalid
                    @enderror"
                                id="img" name="img"  placeholder="Enter image">
                            @error('img')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                    </div>

                    <div class="row ms-2 me-2">
                        <div class=" input-group mb-3 col">
                            <select id="unit"
                                class="form-select select2 @error('unit')
                    is-invalid
                    @enderror"
                                name="unit">
                                <option value="">Select Unit</option>
                                @foreach ($unit as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach

                            </select>
                            @error('unit')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class=" input-group mb-3 col">
                            <select id="category"
                                class="form-select select2 @error('category')
                    is-invalid
                    @enderror"
                                name="category">
                                <option value="">Select category</option>
                                @foreach ($category as $cat)

                                <option value="{{ $cat->id }}">{{ $cat->catName }}</option>

                                @endforeach

                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">DH Materials
                                Cost(BDT):</span>
                            <input type="number" step=".01" id="DH_raw_materials" onkeyup="fetchData()"
                                class="form-control @error('DH_raw_materials')
                     is-invalid
                    @enderror"
                                name="DH_raw_materials" value="{{ old('DH_raw_materials') }}" placeholder="BDT:10,0000">
                            @error('DH_raw_materials')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Warehouse Materials
                                Cost(BDT):</span>
                            <input type="number" step=".01" onkeyup="fetchData()"
                                class="form-control @error('warehouse_raw_materials')
                    is-invalid
                    @enderror"
                                name="warehouse_raw_materials" id="warehouse_raw_materials"
                                value="{{ old('warehouse_raw_materials') }}" placeholder="BDT:10,0000">
                            @error('warehouse_raw_materials')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Wages (BDT):</span>
                            <input type="number" step=".01" id="wages"
                                class="form-control @error('wages')
                     is-invalid
                    @enderror"
                                name="wages" onkeyup="fetchData()"  value="{{ old('wages') }}" placeholder="BDT:10,0000">
                            @error('wages')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Carrying Charge:</span>
                            <input type="number" step=".01"
                                class="form-control @error('carring_charge')
                     is-invalid
                    @enderror"
                                name="carring_charge" id="carring_charge" onkeyup="fetchData()"  value="{{ old('carring_charge') }}"
                                placeholder="BDT:10,0000">
                            @error('carring_charge')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold"
                                value="{{ old('treatement_deduction') }}">Treatement Deduction (BDT):</span>
                            <input type="number" step=".01"
                                class="form-control @error('treatement_deduction')
                     is-invalid
                    @enderror"
                                name="treatement_deduction" onkeyup="fetchData()" id="treatement_deduction"
                                placeholder="BDT:10,0000">
                            @error('treatement_deduction')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="input-group mb-3 col">
                            <div class="form-check form-check-inline">
                                <span class="input-group-text bg-light text-black font-weight-bold me-2">Is it sample
                                    product?:</span>

                                <input class="form-check-input" type="radio" name="is_sample_product"
                                    id="is_sample_product" value="1">
                                <label class="form-check-label" for="is_sample_product">Yes</label>
                                <input class="form-check-input" type="radio" name="is_sample_product"
                                    id="is_sample_product" value="0">
                                <label class="form-check-label" for="is_sample_product">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-2 me-2">

                        <div class="input-group mb-3 col">
                            <!--- textarea-->


                            <span class="input-group-text bg-light text-black font-weight-bold">Details:</span>
                            <div class="md-form">
                                <textarea name="Details"  id="Details" class="md-textarea form-control">{{ old('Details') }}</textarea>

                            </div>

                        </div>

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold">Notes:</span>
                            <div class="md-form">
                                <textarea name="notes" id="notes"  class="md-textarea form-control">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-2 me-2">

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light  text-black font-weight-bold"> Warehouse Total Cost
                                (BDT):</span>
                            <input type="number" step=".01"
                                class="form-control bg-white text-success  font-weight-bold @error('totalcost_for_warehouse')
                     is-invalid
                    @enderror"
                                name="totalcost_for_warehouse" id="totalcost_for_warehouse"
                                value="{{ old('totalcost_for_warehouse') }}">
                            @error('totalcost_for_warehouse')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3 col">
                            <span class="input-group-text bg-light text-black font-weight-bold"> DH Total Cost
                                (BDT):</span>
                            <input type="number" step=".01"
                                class="form-control bg-white text-primary font-weight-bold @error('DH_total_price')
                     is-invalid
                    @enderror"
                                id="DH_total_price" name="DH_total_price"  value="{{ old('DH_total_price') }}">
                            @error('DH_total_price')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                    </div>
                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold">FOB Cost (USD):</span>
                        <input type="number" step=".01" id="FOB_cost"
                            class="form-control @error('FOB_cost')
                 is-invalid
                @enderror"
                            name="FOB_cost" value="{{ old('FOB_cost') }}" placeholder="Enter FOB Cost">
                        @error('FOB_cost')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 me-4 col">

                        <input type="submit" value="save" class="btn btn-success me-2">
                        <a href="{{ url('admin/product') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        function fetchData() {
            var DH_raw_materials = parseFloat($('#DH_raw_materials').val()) || 0;
            var warehouse_raw_materials = parseFloat($('#warehouse_raw_materials').val())|| 0;
            var wages = parseFloat($('#wages').val())|| 0;
            var carring_charge = parseFloat($('#carring_charge').val())|| 0;
            var treatement_deduction = parseFloat($('#treatement_deduction').val())|| 0;

           var totalcost_for_warehouse =parseFloat(warehouse_raw_materials + wages + carring_charge + treatement_deduction);
           var DH_total_price=(totalcost_for_warehouse + DH_raw_materials );



            $('#totalcost_for_warehouse').val(totalcost_for_warehouse);
            $('#DH_total_price').val(DH_total_price);
     }
    </script>
@endsection
