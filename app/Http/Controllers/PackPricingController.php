<?php

namespace App\Http\Controllers;

use App\Http\Requests\packPricingFormValidation;
use App\Models\packPricing;
use Illuminate\Http\Request;

class PackPricingController extends Controller
{

    public function index()
    {
        $packPrice=packPricing::all();
        return view('admin.packPricing.index')->with('packPrice',$packPrice);
    }


    public function create()
    {
        return view('admin.packPricing.create');
    }


    public function store(packPricingFormValidation $request)
    {
        $packPrice=$request->all();
        packPricing::create($packPrice);
        return redirect('admin/pack_price')->with('status','pack priceing created Successfully');
    }


    public function show(packPricing $packPricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\packPricing  $packPricing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packPrice=packPricing::find($id);
        return view('admin.packPricing.edit')->with('packPrice',$packPrice);
    }


    public function update(packPricingFormValidation $request, $id)
    {
        $packPrice=packPricing::find($id);
        $input=$request->all();
        $packPrice->update($input);
        return redirect('admin/pack_price')->with('status','pack priceing Update Successfully');
    }


    public function destroy($id)
    {
        packPricing::destroy($id);
        return redirect('admin/pack_price')->with('status','pack priceing deleted Successfully');
    }
}
