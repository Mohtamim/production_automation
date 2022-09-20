<?php

namespace App\Http\Controllers;

use App\Models\assainedOrder;
use Illuminate\Http\Request;

class assaignOrderReport extends Controller
{
    public function index()
    {

        $orders = assainedOrder::with(['warehouses', 'products','mainorder']);
        return view('admin.orderReport.index')->with('orders', $orders);
    }



    public function show($id)
    {
        $order = assainedOrder::where('id', $id)->with(['warehouses', 'products','mainorder'])->select->get();
        return response()->json($order, 200);
    }
}
