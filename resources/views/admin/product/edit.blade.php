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
                    <span class="input-group-text bg-light text-black font-weight-bold" id="title">Title:</span>
                    <input type="text" value="{{ $product->title }}" class="form-control @error('title')
                     is-invalid
                    @enderror" name="title" placeholder="Enter title">
                    @error('title')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
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
                    <span class="input-group-text bg-light text-black font-weight-bold" id="img">Image:</span>
                    <input type="file"  value="{{ $product->img }}"  class="form-control @error('img')
                     is-invalid
                    @enderror" name="img" >
                    @error('img')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class=" input-group mb-3 col">
                    {{-- <label class="input-group-text bg-light text-black font-weight-bold" id="unit">Unit:</label> --}}
                    <select id="unit" class="form-select select2" name="unit">
                        <option value="" >Select Unit</option>
                        @foreach ($unit as  $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach

                    </select>
                </div>
                 </div>

                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="DH_raw_materials">DH_raw_materials:</span>
                    <input type="number" step=".01"   value="{{ $product->DH_raw_materials }}"class="form-control @error('DH_raw_materials')
                     is-invalid
                    @enderror" name="DH_raw_materials" placeholder="Enter DH_raw_materials">
                    @error('DH_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="warehouse_raw_materials">warehouse_raw_materials:</span>
                    <input type="number" step=".01"  value="{{ $product-> warehouse_raw_materials}}" class="form-control @error('warehouse_raw_materials')
                     is-invalid
                    @enderror" name="warehouse_raw_materials" placeholder="Enter warehouse_raw_materials">
                    @error('warehouse_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="wages">Wages:</span>
                    <input type="number" step=".01"  value="{{ $product->wages }}" class="form-control @error('wages')
                     is-invalid
                    @enderror" name="wages" placeholder="Enter wages">
                    @error('wages')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="carring_charge">Carrying Charge:</span>
                    <input type="number" step=".01"  value="{{ $product->carring_charge }}" class="form-control @error('carring_charge')
                     is-invalid
                    @enderror" name="carring_charge" placeholder="Enter carring_charge">
                    @error('carring_charge')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">

                    <span class="input-group-text bg-light text-black font-weight-bold" id="treatement_deduction">Treatement Deduction:</span>
                    <input type="number" step=".01"  value="{{ $product->treatement_deduction }}" class="form-control @error('treatement_deduction')
                     is-invalid
                    @enderror" name="treatement_deduction" placeholder="Enter Treatement Deduction">
                    @error('treatement_deduction')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <div class="form-check form-check-inline @error('is_sample_product')
                    is-invalid
                    @enderror" id="is_sample_product" name="is_sample_product">
                        <span class="input-group-text bg-light text-black font-weight-bold me-2">Is it sample product?:</span>
                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="1">
                        <label class="form-check-label" for="is_sample_product" value="1">Yes</label>
                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="0">
                        <label class="form-check-label" for="is_sample_product" value="0">No</label>
                        @error('is_sample_product')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="Details">Details:</span>
                    <input type="text"  value="{{ $product->Details }}"  class="form-control @error('Details')
                     is-invalid
                    @enderror" name="Details" placeholder="Enter Details">
                    @error('Details')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="notes">Notes:</span>
                    <input type="text"  value="{{ $product->notes }}"  class="form-control @error('notes')
                     is-invalid
                    @enderror" name="notes" placeholder="Enter Notes">
                    @error('notes')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>
                 <div class="row ms-2 me-2">
                    <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="totalcost_for_warehouse">Totalcost for Warehouse:</span>
                    <input type="number" step=".01"  value="{{ $product->totalcost_for_warehouse }}" class="form-control @error('totalcost_for_warehouse')
                     is-invalid
                    @enderror" name="totalcost_for_warehouse" placeholder="Enter totalcost_for_warehouse">
                    @error('totalcost_for_warehouse')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" >DH Total Price:</span>
                    <input type="number"  step=".01"  value="{{ $product->DH_total_price }}"class="form-control @error('DH_total_price')
                     is-invalid
                    @enderror" name="DH_total_price" id="DH_total_price" placeholder="Enter DH_total_price ">
                    @error('DH_total_price')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                 </div>

                    <div class="input-group mb-3 col">
                        <span class="input-group-text bg-light text-black font-weight-bold" >FOB Cost:</span>
                        <input type="number"  step=".01"  id="FOB_cost" value="{{ $product->FOB_cost }}"class="form-control @error('FOB_cost')
                         is-invalid
                        @enderror" name="FOB_cost" placeholder="Enter FOB_cost ">
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
