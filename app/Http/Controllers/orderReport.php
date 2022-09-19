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



    public function show($id, $ordernumber)
    {

        if ($id != '' && $ordernumber != '') {
            if ($id == 1) {
                $order = mainOrder::where('id', $ordernumber)->with(['buyers', 'products'])->select->get();
            }
            if ($id == 2) {
                $order = assainedOrder::where('mainOrderId', $ordernumber)->with(['buyers', 'products'])->select->get();
            }

            //   $data = DB::table('purchase_manage')
            //   ->leftJoin('productstock_manages' , 'purchase_manage.productID','=','productstock_manages.id')
            //     ->whereBetween('purchaseDate', array($request->from_date, $request->to_date))
            //     ->get();
            //  }
            //  else
            //  {
            //   $data = DB::table('purchase_manage')->orderBy('date', 'desc')->get();
            //  }
            //  echo json_encode($data);
        }

        // return response()->json($order, 200);

        echo json_encode($order);
    }
}
