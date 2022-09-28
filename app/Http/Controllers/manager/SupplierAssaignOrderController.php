<?php

namespace App\Http\Controllers\manager;

use App\Models\managerlist;

use Illuminate\Http\Request;
use App\Models\assainedOrder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\supplierAssaignOrder;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\supplierOrderRequest;

class SupplierAssaignOrderController extends Controller
{
    public function index()
    {
        $id=Auth::user()->userId;
        $warehouse = managerlist::where('managerId',$id)->value('warehouseId');
        $orders = supplierAssaignOrder::where('warehouseId',$warehouse)->select()->with(['products'])->get();
        return view('manager.SupplierAssainedOrder.index')->with(['orders'=>$orders]);
    }

    public function show($id)
    {
         $order = supplierAssaignOrder::find($id)->value('warehouseId');
         $orders = supplierAssaignOrder::where('mainOrderId',$order)->select()->with(['products'])->get();
        return view('manager.SupplierAssainedOrder.show')->with(['orders'=>$orders]);
    }

    public function edit($id)
    {
        $order = supplierAssaignOrder::find($id)->value('warehouseId');
        $orders = supplierAssaignOrder::where('mainOrderId',$order)->select()->with(['products'])->get();

       return view('manager.SupplierAssainedOrder.edit')->with('orders',$orders);
    }


    public function update(supplierOrderRequest $request, $id)
    {
        $id=supplierAssaignOrder::find($id)->value('id');
       $status=$request->status;
       DB::table('supplier_assaign_orders')
                ->where('mainOrderId',$id)
                ->update(['status' => $status]);
       return redirect('manager/supplier-assign-order')->with('flash_message','Ordered value Updated');
    }


    public function destroy($id)
    {
        assainedOrder::destroy($id);
        return redirect('manager/supplier-assign-order')->with('status', 'Assign Ordered has been deleted');
    }
}


