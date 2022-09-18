<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\warehouse;
use App\Models\warehousePayment;
use Illuminate\Http\Request;

class warehouseReportController extends Controller
{

    public function index()
    {

      $warehouses=warehouse::all();
     return view('admin.WarehouseReports.index')->with('warehouses',$warehouses);

    }



    public function show($id)
    {

        $warehouses= warehousePayment::where('warehouseName', $id)->select()->with(['warehouse'])->get();
            return response()->json($warehouses, 200);

    }

}
