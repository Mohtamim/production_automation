<?php

namespace App\Http\Controllers;

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
        $order = mainOrder::where('id', $id)->with(['buyers', 'products'])->select()->get();
        return response()->json($order, 200);
    }
}
