<?php

namespace App\Http\Controllers;

use App\Http\Requests\warehouseFormValidation;
use App\Models\warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{

    public function index()
    {
        $warehouse= warehouse::all();
        return view('admin.warehouse.index')->with('warehouse', $warehouse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.warehouse.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(warehouseFormValidation $request)
    {
        $input= $request->all();
        warehouse::create($input);
        return redirect('admin/warehouses')->with('flash_message','warehouse Added');
    }


    public function show(warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse = warehouse::find($id);
        return view('admin.warehouse.edit')->with('warehouse',$warehouse);
    }


    public function update(warehouseFormValidation  $request, $id)
    {
        $warehouse = warehouse::find($id);
        $input = $request->all();
        $warehouse->update($input);
        return redirect('admin/warehouses')->with('flash_message', 'warehouse Updated!');
    }


    public function destroy(warehouse $warehouse)
    {
        //
    }
}
