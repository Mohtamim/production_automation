<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        return redirect('admin/warehouses')->with('success','Warehouse create successfully');
    }


    public function show($id)
    {
        
        $order = warehouse::find($id);
        return view('admin.warehouse.show')->with('warehouse',$order);
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
        return redirect('admin/warehouses')->with(['update'=>'Your warehouse is Updated']);
    }


    public function destroy($id)
    {
                   
        warehouse::destroy($id);
        return redirect('admin/warehouses')->with('delete', 'Warehouse has been deleted');
    }
}
