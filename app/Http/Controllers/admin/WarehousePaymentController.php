<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\warehouse;
use App\Models\managerlist;
use Illuminate\Http\Request;
use App\Models\warehousePayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\warehousePaymentValidation;

class WarehousePaymentController extends Controller
{

    public function index(){
    $managers = DB::table('managerlists')->select('managerName','email')->get();
    $warehousePayment=warehousePayment::all();
        return view('admin.WarehousePayment.index')->with(['warehousePayment'=>$warehousePayment,'managers'=>$managers]);
    }

    public function create()
    {
        $managers=managerlist::all();
        $warehouse=warehouse::all();
        return view('admin.WarehousePayment.create')->with(['managers'=>$managers,'warehouse'=>$warehouse]);
    }


    public function store(warehousePaymentValidation $request)
    {

        $managerName=$request->managerName;
        $managerId=$request->managerId;
        $email=$request->email;
        $warehouseName=$request->warehouseName;
        $amount=$request->amount;
        $note=$request->note;
        $date=$request->date;
        $wPay = new warehousePayment();

        $balance= DB::table('warehouses')
                ->where('id', $warehouseName)
                ->get('balance')->value('balance');

        $total= $balance + $amount;
        DB::table('warehouses')
                ->where('id', $warehouseName)
                ->update(['balance' => $total]);

        $wPay->managerName= $managerName;
        $wPay->managerId= $managerId;
        $wPay->email= $email;
        $wPay->warehouseName= $warehouseName;
        $wPay->amount= $amount;
        $wPay->balance= $total;
        $wPay->note= $note;
        $wPay->date;
        $wPay->save();

        return redirect('admin/warehouse_payments')->with('success','warehouse Payments created successfully' );

    }


    public function show($id)
    {
        $manager = managerlist::where('managerId',$id)->select('managerId','managerName','email','warehouseId')->with(['warehouse'])->get();
        return response()->json($manager, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function edit(warehousePayment $warehousePayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehousePayment  $warehousePayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(warehousePayment $warehousePayment)
    {

    }
}
