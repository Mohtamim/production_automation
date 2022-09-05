<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\packPricingFormValidation;
use App\Models\PackageingCompany;
use App\Models\packPricing;
use App\Models\packSize;
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
        $packTitle=packSize::all();
        $packSize=packSize::all();
        $packaingCompany = PackageingCompany::all();
        return view('admin.packPricing.create')->with(['companyName'=>$packaingCompany,'packSize'=>$packSize,'packTitle'=>$packTitle]);
    }


    public function store(packPricingFormValidation $request)
    {
        $packPrice=$request->all();

        packPricing::create($packPrice);
        return redirect('admin/pack_price')->with('success','Package Price create successfully');
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
        return redirect('admin/pack_price')->with(['update'=>'Your Package Price is Updated']);
    }


    public function destroy($id)
    {
        packPricing::destroy($id);
        return redirect('admin/pack_price')->with('delete', 'Package Price has been deleted');
    }
}
