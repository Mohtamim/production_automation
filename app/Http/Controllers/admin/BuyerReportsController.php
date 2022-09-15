<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\buyers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BuyerReportsController extends Controller
{
    public function index()
    {

       $buyer=buyers::all();
     return view('admin.BuyersReports.index')->with('buyer',$buyer);



     }

     public function show($id){
        $buyer= buyers::where('id', $id)->select('buyerCode','buyerName','email','country')->get();;
         return response()->json($buyer, 200);
     }
 }