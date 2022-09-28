<?php

namespace App\Http\Controllers;

use App\Models\dhDetails;
use App\Models\mainOrder;
use Illuminate\Http\Request;

class proformaInvoice extends Controller
{
    public function index()
    {
        $dhDetails = dhDetails::select()->get();
        return view('admin.invoice.proformaInvoice')->with('dhDetails',$dhDetails);
    }
    public function pidata($id)
    {
          $dhDetails = dhDetails::select()->get();
        $order = mainOrder::where('DH_PID', $id)->with(['buyers', 'products','ponos'])->select()->get();
        return response()->json($order, 200);
    }
}
