<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Models\assainedOrder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\assainOrderFormValidation;
use App\Models\managerlist;
use App\Models\warehouse;
use Illuminate\Support\Facades\DB;

class managerAssignOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->userId;
        $warehouse = managerlist::where('managerId',$id)->value('warehouseId');
        $orders = assainedOrder::where('warehouseId',$warehouse)->select()->with(['products'])->get();
        return view('manager.assainedOrder.index')->with(['orders'=>$orders]);
    }

    public function show($id)
    {
         $order = assainedOrder::find($id)->value('warehouseId');
         $orders = assainedOrder::where('mainOrderId',$order)->select()->with(['products'])->get();
        return view('manager.assainedOrder.show')->with(['orders'=>$orders]);
    }

    public function edit($id)
    {
        $order = assainedOrder::find($id)->value('warehouseId');
        $orders = assainedOrder::where('mainOrderId',$order)->select()->with(['products'])->get();

       return view('manager.assainedOrder.edit')->with('orders',$orders);
    }


    public function update(Request $request, $id)
    {
        $id=assainedOrder::find($id)->value('id');
        $status=$request->status;
       DB::table('assained_orders')
                ->where('mainOrderId',$id)
                ->update(['status' => $status]);
       return redirect('manager/order')->with('flash_message','Ordered value Updated');
    }


    public function destroy($id)
    {
        assainedOrder::destroy($id);
        return redirect('manager/order')->with('status', 'Assign Ordered has been deleted');
    }
}
