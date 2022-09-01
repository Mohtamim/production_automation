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
                    <h4 class="text-center">ADD Product</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="" action="{{ url('admin/product') }}" method="POST">
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
                    <span class="input-group-text bg-light text-black font-weight-bold" id="Image">image:</span>
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
                    <label class="input-group-text bg-light text-black font-weight-bold" id="unit">Unit:</label>
                    <select id="unit" class="form-select" name="unit">
                        <option value="" >Select Unit</option>
                        @foreach ($unit as  $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class=" input-group mb-3 col">

                    <label class="input-group-text bg-light text-black font-weight-bold" id="category">Category:</label>

                    <select id="category" class="form-select" name="category">
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
                    @enderror" name="DH_raw_materials" placeholder="ex:12345">
                    @error('DH_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="supplier_raw_materials">Supplier Materials Cost:</span>
                    <input type="number" step=".01" class="form-control @error('supplier_raw_materials')
                     is-invalid
                    @enderror" name="supplier_raw_materials" placeholder="ex: 123456">
                    @error('supplier_raw_materials')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="wages">Wages:</span>
                    <input type="number" step=".01" class="form-control @error('wages')
                     is-invalid
                    @enderror" name="wages" placeholder="ex: 123456">
                    @error('wages')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="carring_charge">Carring Charge:</span>
                    <input type="number" step=".01" class="form-control @error('carring_charge')
                     is-invalid
                    @enderror" name="carring_charge" placeholder="ex:12345">
                    @error('carring_charge')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="treatement_deduction">Treatement Deduction:</span>
                    <input type="number" step=".01" class="form-control @error('treatement_deduction')
                     is-invalid
                    @enderror" name="treatement_deduction" placeholder="ex: 123456">
                    @error('treatement_deduction')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>


                <div class="input-group mb-3 col">
                    <div class="form-check form-check-inline">
                        <span class="input-group-text bg-light text-black font-weight-bold me-2" id="is_sample_product">Is it sample product?:</span>

                        <input class="form-check-input" type="radio" name="is_sample_product" id="is_sample_product" value="option1">
                        <label class="form-check-label" for="is_sample_product" value="1">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input @error('is_sample_product')
                        is-invalid
                       @enderror" type="radio" name="is_sample_product" id="is_sample_product" value="option2">
                        <label class="form-check-label" for="is_sample_product" value="0">No</label>
                      </div>

                    @error('is_sample_product')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row ms-2 me-2">

                <div class="input-group mb-3 col">
                    <!--- textarea-->


                    <span class="input-group-text bg-light text-black font-weight-bold" id="Details">Details:</span>
                    <div class="md-form">
                        <textarea name="Details" id="Details" class="md-textarea form-control" ></textarea>

                    </div>

                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="notes">Notes:</span>
                    <div class="md-form">
                        <textarea name="notes" id="notes" class="md-textarea form-control" ></textarea>
                    </div>
                </div>
            </div><div class="row ms-2 me-2">

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="totalcost_for_supplier"> Supplier Total Cost:</span>
                    <input type="number" step=".01" class="form-control @error('totalcost_for_supplier')
                     is-invalid
                    @enderror" name="totalcost_for_supplier" placeholder="ex:12345">
                    @error('totalcost_for_supplier')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="input-group mb-3 col">
                    <span class="input-group-text bg-light text-black font-weight-bold" id="DH_total_price"> DH Total Cost:</span>
                    <input type="number" step=".01" class="form-control @error('DH_total_price')
                     is-invalid
                    @enderror" name="DH_total_price" placeholder="ex:12345 ">
                    @error('DH_total_price')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>

        </div>
    </div>
</div>
@endsection
