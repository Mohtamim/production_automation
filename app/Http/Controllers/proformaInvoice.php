<?php

namespace App\Http\Controllers;

use App\Models\mainOrder;
use Illuminate\Http\Request;

class proformaInvoice extends Controller
{
    public function index()
    {
        return view('admin.invoice.proformaInvoice');
    }
    public function pidata($id)
    {
        $order = mainOrder::where('id', $id)->with(['buyers', 'products'])->select()->get();
        return response()->json($order, 200);
    }
}
