<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pruduct;
use Illuminate\Http\Request;

class productsfetch extends Controller
{
    public function show($oid)
    {

        $order = pruduct::where('id',$oid)->select('id','FOB_cost')->get();
        return response()->json($order, 200);
    }

}
