<?php

namespace App\Http\Controllers;

use App\Http\Requests\productFormValidation;
use App\Models\pruduct;
use Illuminate\Http\Request;

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
        return view('admin.product.create') ;
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
        pruduct::create($input);
        return redirect('admin/product')->with('flash_message','Product Added');
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
        $product = pruduct::find($id);
        return view('admin.product.edit')->with('product',$product);
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
        $input = $request->all();
        $product->update($input);
        return redirect('admin/product')->with('flash_message', 'product Updated!');
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
        return redirect('admin/product')->with('product', 'Product has been deleted');
    }
}
