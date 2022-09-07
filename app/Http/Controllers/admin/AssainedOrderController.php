<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\assainOrderFormValidation;
use App\Models\assainedOrder;
use App\Models\mainOrder;
use App\Models\warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssainedOrderController extends Controller
{

    public function index()
    {
        $input=assainedOrder::all();
        $mainoreders=mainOrder::all();
        return view('admin.assainedOrder.index',compact('mainoreders'))->with('assain',$input);
    }


    public function create()
    {
        $wareHouse = wareHouse::all();
        $mainOrder = mainOrder::all();
        return view('admin.assainedOrder.create')->with(['warehouse'=> $wareHouse,'mainOrder'=> $mainOrder]);
    }


    public function store(assainOrderFormValidation $request)
    {


        $mainOrderId = $request->mainOrderId;
        $productName = $request->productName;
        $warehouseId = $request->warehouseId;
        $quantity = $request->quantity;
        $status = $request->status;

        $mainOrder = mainOrder::all();
        $remainQ = mainOrder::where('id',$mainOrderId)->value('remaing_quantity');
        $remainQ1= $remainQ-$quantity;

        if($remainQ<=0){

            return redirect('admin/assaign_order/create')->with('error','You have no remain quantity');
        }
        elseif($remainQ1>=0){
            DB::table('main_orders')
                ->where('id', $mainOrderId)
                ->update(['remaing_quantity' => $remainQ1]);

            assainedOrder::insert([
                'mainOrderId'=>$mainOrderId,
                'productId'=>$productName,
                'warehouseId'=>$warehouseId,
                'quantity'=>$quantity,
                'status'=>$status,

           ]);
        return redirect('admin/assaign_order')->with('success','Assign Order create successfully');
        }
    return redirect('admin/assaign_order/create')->with('error','You haven\'t enough remain quantity');
}


    public function show($id)
    {
        $order = assainedOrder::find($id);

        return view('admin.assainedOrder.show')->with('assain',$order);
    }

    public function edit($id)
    {
       $input=assainedOrder::find($id);
       return view('admin.assainedOrder.edit')->with('assain',$input);
    }


    public function update(assainOrderFormValidation $request, $id)
    {
       $assain=assainedOrder::find($id);
       $input=$request->all();
       $assain->update($input);
       return redirect('admin/assaign_order')->with('flash_message','Assign Ordered value Updated');
    }


    public function destroy($id)
    {
        assainedOrder::destroy($id);
        return redirect('admin/assaign_order')->with('status', 'Assign Ordered has been deleted');
    }
}
