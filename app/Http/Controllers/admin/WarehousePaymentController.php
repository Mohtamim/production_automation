<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\warehousePaymentValidation;
use App\Models\warehousePayment;
use Illuminate\Http\Request;

class WarehousePaymentController extends Controller
{

    public function index()
    {
        $warehousePayment=warehousePayment::all();
        return view('admin.WarehousePayment.index')->with('warehousePayment',$warehousePayment);
    }

    public function create()
    {
        return view('admin.WarehousePayment.create');
    }


    public function store(warehousePaymentValidation $request)
    {

    }

    
    public function show(warehousePayment $warehousePayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function edit(warehousePayment $warehousePayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warehousePayment $warehousePayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(warehousePayment $warehousePayment)
    {
        //
    }
}
