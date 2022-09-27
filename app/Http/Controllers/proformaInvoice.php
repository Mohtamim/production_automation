<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proformaInvoice extends Controller
{
    public function index()
    {
        return view('admin.invoice.proformaInvoice');
    }
}
