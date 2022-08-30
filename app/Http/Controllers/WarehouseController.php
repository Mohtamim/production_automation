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
    public function store(Request $request)
    {
       return redirect('warehouses');
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
    public function edit(warehouse $warehouse)
    {
        return view('admin.warehouse.edit');
    }


    public function update(warehouseFormValidation $request, $id)
    {
        //
    }


    public function destroy(warehouse $warehouse)
    {
        //
    }
}
