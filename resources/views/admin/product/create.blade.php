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
        </div><hr>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/product') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="row ms-2 me-2">
                <div class=" input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="title">Product Name:</span>
                    <input type="text" class="form-control @error('title')
                     is-invalid
                    @enderror" name="title" placeholder="Product Name">
                    @error('title')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class=" input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="image">Image:</span>
                    <input type="file"  class="form-control @error('image')
                     is-invalid
                    @enderror" name="image" placeholder="Enter image">
                    @error('image')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

            </div>

            <div class="row ms-2 me-2">
                 <div class=" input-group mb-3 col">
                    {{-- <label class="input-group-text bg-light text-black font-weight-bold" id="unit">Unit:</label> --}}
                    <select id="unit" class="form-select select2" name="unit">
                        <option value="" >Select Unit</option>
                        @foreach ($unit as  $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class=" input-group mb-3 col">

                    {{-- <label class="input-group-text bg-light text-black font-weight-bold" id="category">Category:</label> --}}

                    <select id="category" class="form-select select2" name="category">
                        <option value="" >Select category</option>
                        @foreach ($category as  $cat)
                        <option value="{{ $cat->id }}">{{ $cat->catName }}</option>
                        @endforeach

                    </select>

            </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="DH_raw_materials">DH Materials Cost:</span>
                    <input type="number" step=".01" class="form-control @error('DH Materials cost')
                     is-invalid
                    @enderror" name="DH_raw_materials"  value="{{ old('DH_raw_materials') }}" placeholder="BDT:10,0000">
                    @error('DH_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="warehouse_raw_materials">Warehouse Materials Cost:</span>
                    <input type="number" step=".01" class="form-control"
                     name="warehouse_raw_materials"  value="{{ old('warehouse_raw_materials') }}" placeholder=
                    "BDT:10,0000">

                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="wages">Wages:</span>
                    <input type="number" step=".01" class="form-control @error('wages')
                     is-invalid
                    @enderror" name="wages"  value="{{ old('wages') }}" placeholder="BDT:10,0000">
                    @error('wages')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="carring_charge">Carrying Charge:</span>
                    <input type="number" step=".01" class="form-control @error('carring_charge')
                     is-invalid
                    @enderror" name="carring_charge"  value="{{ old('carring_charge') }}" placeholder="BDT:10,0000">
                    @error('carring_charge')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" value="{{ old('treatement_deduction') }}" id="treatement_deduction">Treatement Deduction:</span>
                    <input type="number" step=".01" class="form-control @error('treatement_deduction')
                     is-invalid
                    @enderror" name="treatement_deduction" placeholder="BDT:10,0000">
                    @error('treatement_deduction')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <div class="form-check form-check-inline">
                        <span class="input-group-text bg-light text-black font-weight-bold me-2" id="is_sample_product">Is it sample product?:</span>

                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="1">
                        <label class="form-check-label" for="is_sample_product" value="1">Yes</label>
                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="0">
                        <label class="form-check-label" for="is_sample_product" value="0">No</label>
                      </div>
                </div>
            </div>
            <div class="row ms-2 me-2">

                <div class="input-group mb-3 col">
                    <!--- textarea-->


                    <span class="input-group-text bg-light text-black font-weight-bold" id="Details">Details:</span>
                    <div class="md-form">
                        <textarea name="Details" id="Details" value="{{ old('Details') }}" class="md-textarea form-control" ></textarea>

                    </div>

                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="notes">Notes:</span>
                    <div class="md-form">
                        <textarea name="notes" id="notes" value="{{ old('notes') }}" class="md-textarea form-control" ></textarea>
                    </div>
                </div>
            </div><div class="row ms-2 me-2">

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="totalcost_for_warehouse"> Warehouse Total Cost:</span>
                    <input type="number" step=".01" class="form-control @error('totalcost_for_warehouse')
                     is-invalid
                    @enderror" name="totalcost_for_warehouse" value="{{ old('totalcost_for_warehouse') }}" placeholder="BDT:10,0000">
                    @error('totalcost_for_warehouse')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="DH_total_price"> DH Total Cost:</span>
                    <input type="number" step=".01" class="form-control @error('DH_total_price')
                     is-invalid
                    @enderror" name="DH_total_price" value="{{ old('DH_total_price') }}" placeholder="BDT:10,0000 ">
                    @error('DH_total_price')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

            </div>
            <div class="input-group mb-3 col">
                <span class="input-group-text bg-light text-black font-weight-bold" id="FOB_cost">FOB Cost:</span>
                <input type="number"  step=".01"  class="form-control @error('FOB_cost')
                 is-invalid
                @enderror" name="FOB_cost" placeholder="Enter FOB_cost ">
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
@endsection
