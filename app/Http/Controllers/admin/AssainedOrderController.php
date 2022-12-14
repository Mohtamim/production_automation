<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Models\pruduct;
use App\Models\mainOrder;
use App\Models\warehouse;
use Illuminate\Http\Request;
use App\Models\assainedOrder;
use Illuminate\Support\Facades\DB;


use function GuzzleHttp\Promise\queue;
use App\Http\Requests\assainOrderFormValidation;

class AssainedOrderController extends Controller
{

    public function index()
    {
        $assainorders=assainedOrder::with('products','warehouses')->get();
        return view('admin.assainedOrder.index',compact('assainorders'));
    }


    public function create()
    {
        $warehouse = wareHouse::all();
        $mainorders= mainOrder::with('products')->get();
        return view('admin.assainedOrder.create',compact('mainorders'))->with('warehouse',$warehouse);
    }


    public function store(assainOrderFormValidation $request)
    {

        $mainOrderId = $request->mainOrderId;
        $productName = $request->productName;
        $warehouseId = $request->warehouseId;
        $quantity = $request->quantity;
        $status = $request->status;
        $delivery_date = $request->delivery_date;

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
                'delivery_date'=>$delivery_date

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
       $warehouses=wareHouse::all();

       return view('admin.assainedOrder.edit')->with(['assain'=>$input,'warehouses'=>$warehouses]);
    }


    public function update(assainOrderFormValidation $request, $id)
    {
       $id=assainedOrder::find($id)->value('id');
       $delivery_date1=assainedOrder::where('id',$id)->get('delivery_date')->value('delivery_date');
    //    $input=$request->all();
    //    $assain->update($input);
    //    return redirect('admin/assaign_order')->with('flash_message','Assign Ordered value Updated');
    $quantity = $request->quantity;
    $quantity = $request->quantity;
    $delivery_date = $request->delivery_date;
    $status = $request->status;
    if($delivery_date != $delivery_date1){
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['delivery_date' => $delivery_date]);
    }

    if($status==0 || $status==1){
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['status' => $status]);
    }
    elseif($status==2){
        $time = Carbon::now()->toDateString();
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['status' => $status,'processing'=>$time]);
    }
    elseif($status==3){
        $time = Carbon::now()->toDateString();
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['status' => $status,'completed'=>$time]);
    }
    elseif($status==4){
        $time = Carbon::now()->toDateString();
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['partial_delivery_quantity'=> $quantity,'status' => $status,'delivered'=>$time]);
    }
    elseif($status==5){
        $time = Carbon::now()->toDateString();
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'received'=>$time]);
    }
    elseif($status==6){
        $time = Carbon::now()->toDateString();
        DB::table('assained_orders')
        ->where('id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'approved'=>$time]);
        DB::table('managerlists')
        ->where('id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'approved'=>$time]);
    }
    return redirect('admin/assaign_order')->with('flash_message','Assign Ordered value Updated');
    }




    public function destroy($id)
    {
        assainedOrder::destroy($id);

        return redirect('admin/assaign_order')->with('status', 'Assign Ordered has been deleted');
    }
}
