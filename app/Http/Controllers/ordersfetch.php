<?php

namespace App\Http\Controllers;

use App\Models\mainOrder;
use Illuminate\Http\Request;

class ordersfetch extends Controller
{
    public function show($oid)
    {

        if($oid==10){
            $order = mainOrder::with(['products','buyers'])->select()->get();
        }else{
            $order = mainOrder::where('status',$oid)->with(['products','buyers'])->select()->get();
        }

        return response()->json($order, 200);
    }
}
