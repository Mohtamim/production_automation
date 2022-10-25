<?php

namespace App\Http\Controllers;

use App\Models\bankBenificiary;
use App\Models\dhDetails;
use App\Models\mainOrder;
use App\Models\shiperAndExporter;
use App\Models\termsCondition;
use Illuminate\Http\Request;

class proformaInvoice extends Controller
{
    public function index()
    {
        $terms = termsCondition::select()->get();
        $dhDetails = dhDetails::select()->get();
        $bank = bankBenificiary::select()->get();
        $shipping = shiperAndExporter::select()->get();
        return view('admin.invoice.proformaInvoice')->with(['dhDetails'=>$dhDetails,'shippings' => $shipping,'banks'=>$bank,'terms'=>$terms]);
    }
    public function pidata($id)
    {
          $dhDetails = dhDetails::select()->get();
        $order = mainOrder::where('DH_PID', $id)->with(['buyers', 'products','ponos'])->select()->get();
        return response()->json($order, 200);
    }
}
