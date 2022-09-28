<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\assainedOrder;
use App\Models\mainOrder;
use Illuminate\Http\Request;

class orderReport extends Controller
{
    public function index()
    {

        $orders = mainOrder::with(['buyers', 'products']);
        return view('admin.orderReport.index')->with('orders', $orders);
    }



    public function show($id)
    {
        $order = mainOrder::where('DH_PID','like', $id)->with(['buyers', 'products'])->select()->get();
        return response()->json($order, 200);
    }
}
