<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\unit;
use App\Models\pruduct;
use Illuminate\Http\Request;
use App\Http\Requests\productFormValidation;

class PruductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input=pruduct::all();
        return view('admin.product.index')->with('product',$input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = cat::all();
        $unit = unit::all();
        return view('admin.product.create')->with(['category'=>$category,'unit'=>$unit]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productFormValidation $request)
    {
        $input= $request->all();
        $title = $request->title;
        $category = $request->category;
        $DH_raw_materials = $request->DH_raw_materials;
        $warehouse_raw_materials = $request->warehouse_raw_materials;
        $wages = $request->wages;
        $unit = $request->unit;
        $carring_charge = $request->carring_charge;
        $treatement_deduction = $request->treatement_deduction;
        $is_sample_product = $request->filled('is_sample_product');
        $Details = $request->Details;
        $notes = $request->notes;
        $totalcost_for_warehouse = $request->totalcost_for_warehouse;
        $DH_total_price = $request->DH_total_price;
        $FOB_cost=$request->FOB_cost;
        $img = $request->file('img');
        $img_name= hexdec(uniqid()). '.' .$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);



        pruduct::insert([
            'title'=>$title,
            'catId'=>$category,
            'DH_raw_materials'=>$DH_raw_materials,
            'warehouse_raw_materials'=>$warehouse_raw_materials,
            'wages'=>$wages,
            'DH_total_price'=>$DH_total_price,
            'FOB_cost'=>$FOB_cost,
            'unit'=>$unit,
            'carring_charge'=>$carring_charge,
            'treatement_deduction'=>$treatement_deduction,
            'is_sample_product'=>$is_sample_product,
            'Details'=>$Details,
            'notes'=>$notes,
            'totalcost_for_warehouse'=>$totalcost_for_warehouse,
            'img'=>$img_url,
       ]);
        return redirect('admin/product')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pruduct  $pruduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = pruduct::find($id);

        return view('admin.product.show')->with('product',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pruduct  $pruduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = unit::all();
        $category = cat::all();
        $product = pruduct::find($id);
        return view('admin.product.edit')->with(['category'=>$category,'product'=>$product,'unit'=>$unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pruduct  $pruduct
     * @return \Illuminate\Http\Response
     */
    public function update(productFormValidation  $request, $id)
    {
        $product = pruduct::find($id);
        // $input = $request->all();
        $title = $request->title;
        $category = $request->category;
        $DH_raw_materials = $request->DH_raw_materials;
        $warehouse_raw_materials = $request->warehouse_raw_materials;
        $wages = $request->wages;
        $unit = $request->unit;
        $carring_charge = $request->carring_charge;
        $treatement_deduction = $request->treatement_deduction;
        $is_sample_product = $request->filled('is_sample_product');
        $Details = $request->Details;
        $notes = $request->notes;
        $totalcost_for_warehouse = $request->totalcost_for_warehouse;
        $FOB_cost=$request->FOB_cost;
        $DH_total_price = $request->DH_total_price;
        $img = $request->file('img');
        $img_name= hexdec(uniqid()). '.' . $img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);

        $input=(['title'=>$title,
            'category'=>$category,
            'DH_raw_materials'=>$DH_raw_materials,
            'warehouse_raw_materials'=>$warehouse_raw_materials,
            'wages'=>$wages,
            'DH_total_price'=>$DH_total_price,
            'unit'=>$unit,
            'carring_charge'=>$carring_charge,
            'treatement_deduction'=>$treatement_deduction,
            'is_sample_product'=>$is_sample_product,
            'Details'=>$Details,
            'FOB_cost'=>$FOB_cost,
            'notes'=>$notes,
            'totalcost_for_warehouse'=>$totalcost_for_warehouse,
            'img'=>$img_url]);

        $product->update($input);
        return redirect('admin/product')->with(['update'=>'Your Product is Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pruduct  $pruduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pruduct::destroy($id);
        return redirect('admin/product')->with('delete', 'Product has been deleted');
    }
}
