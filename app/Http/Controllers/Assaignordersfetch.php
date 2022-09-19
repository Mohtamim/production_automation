<?php

namespace App\Http\Controllers;

use App\Models\assainedOrder;
use App\Models\warehouse;
use Illuminate\Http\Request;

class Assaignordersfetch extends Controller
{
    public function show($oid)
    {

        if($oid==10){
            $order = assainedOrder::with(['products','warehouses'])->select()->get();
        }else{
            $order = assainedOrder::where('status',$oid)->with(['products','warehouses'])->select()->get();
        }

        return response()->json($order, 200);
    }
}
