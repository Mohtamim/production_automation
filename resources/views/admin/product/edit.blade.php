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
                    <h2 class="text-center text-success font-weight-bold mt-2">EDIT PRODUCT</h2>
                </div>
            </div>
        </div><hr>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                 @method('PATCH')
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Title:</span>
                    <input type="text" value="{{ $product->title }}" id="title" class="form-control @error('title')
                     is-invalid
                    @enderror" name="title">
                    @error('title')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class=" input-group mb-3 col">

                    <select id="category" class="form-select select2 @error('category')
                    is-invalid
                    @enderror" name="category">
                        <option value="" >Select category</option>
                        @foreach ($category as  $cat)
                        <option value="{{ $cat->id }}">{{ $cat->catName }}</option>
                        @endforeach
                        @error('category')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </select>


            </div>
                 </div>

                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Image:</span>
                    <input type="file" id="img" value="{{ $product->img }}"  class="form-control @error('img')
                     is-invalid
                    @enderror" name="img" >
                    @error('img')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class=" input-group mb-3 col">
                    {{-- <label class="input-group-text bg-light text-black font-weight-bold" id="unit">Unit:</label> --}}
                    <select id="unit" class="form-select select2 @error('unit')
                    is-invalid
                    @enderror" name="unit">
                        <option value="" >Select Unit</option>
                        @foreach ($unit as  $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach
                        @error('unit')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </select>

                </div>
                 </div>

                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >DH_raw_materials:</span>
                    <input type="number" step=".01" id="DH_raw_materials"  value="{{ $product->DH_raw_materials }}"class="form-control @error('DH_raw_materials')
                     is-invalid
                    @enderror" name="DH_raw_materials">
                    @error('DH_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">warehouse_raw_materials:</span>
                    <input type="number" step=".01" id="warehouse_raw_materials"  value="{{ $product-> warehouse_raw_materials}}" class="form-control @error('warehouse_raw_materials')
                     is-invalid
                    @enderror" name="warehouse_raw_materials">
                    @error('warehouse_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Wages:</span>
                    <input type="number" step=".01" id="wages"  value="{{ $product->wages }}" class="form-control @error('wages')
                     is-invalid
                    @enderror" name="wages">
                    @error('wages')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Carrying Charge:</span>
                    <input type="number" step=".01"  value="{{ $product->carring_charge }}" id="carring_charge" class="form-control @error('carring_charge')
                     is-invalid
                    @enderror" name="carring_charge">
                    @error('carring_charge')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">

                    <span class="input-group-text bg-light text-black font-weight-bold" >Treatement Deduction:</span>
                    <input type="number" step=".01" id="treatement_deduction" value="{{ $product->treatement_deduction }}" class="form-control @error('treatement_deduction')
                     is-invalid
                    @enderror" name="treatement_deduction">
                    @error('treatement_deduction')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <div class="form-check form-check-inline
                    id="is_sample_product" name="is_sample_product">
                        <span class="input-group-text bg-light text-black font-weight-bold me-2">Is it sample product?:</span>
                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="1">
                        <label class="form-check-label" for="is_sample_product">Yes</label>
                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="0">
                        <label class="form-check-label" for="is_sample_product">No</label>
                      </div>
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold">Details:</span>
                    <input type="text"  value="{{ $product->Details }}" id="Details" class="form-control" name="Details">
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >Notes:</span>
                    <input type="text"  value="{{ $product->notes }}" id="notes"  class="form-control  name="notes">
                </div>

                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="totalcost_for_warehouse">Totalcost for Warehouse:</span>
                    <input type="number" step=".01"  value="{{ $product->totalcost_for_warehouse }}" class="form-control @error('totalcost_for_warehouse')
                     is-invalid
                    @enderror" name="totalcost_for_warehouse">
                    @error('totalcost_for_warehouse')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >DH Total Price:</span>
                    <input type="number"  step=".01"  value="{{ $product->DH_total_price }}"class="form-control @error('DH_total_price')
                     is-invalid
                    @enderror" name="DH_total_price" id="DH_total_price">
                    @error('DH_total_price')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>

                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >FOB Cost:</span>
                        <input type="number"  step=".01"  id="FOB_cost" value="{{ $product->FOB_cost }}"class="form-control @error('FOB_cost')
                         is-invalid
                        @enderror" name="FOB_cost">
                        @error('FOB_cost')
                         <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 col">
                <input type="submit" value="Update" class="btn btn-success me-1">
                <a href="{{ url('admin/product') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                 </div>
              </form>

        </div>
    </div>
</div>
@endsection
