<?php


namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use App\Models\buyers;
use App\Models\pruduct;
use App\Models\mainOrder;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use App\Http\Requests\mainOrderFormValidation;
use App\Models\dhDetails;
use App\Models\pono;


class MainOrderController extends Controller
{

    public function index()
    {
        $mainorders= mainOrder::with(['buyers','products'])->get();
        return view('admin.mainOrder.index',compact('mainorders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyers=buyers::all();
        $products= pruduct::all();
        $invoice = new mainOrder();
    
        $lastInvoiceID = $invoice->orderBy('DH_PID', 'desc')->pluck('DH_PID')->first();
        $lastInvoiceID= str_pad($lastInvoiceID,4,'-',STR_PAD_LEFT);
        $lastInvoiceID = intval($lastInvoiceID);
        $newInvoiceID = $lastInvoiceID + 1;

       return view('admin.mainOrder.create',compact('newInvoiceID'))->with(['products'=>$products,'buyers'=>$buyers]);
    }
//mainOrderFormValidation

    public function store(Request $request)
    {

        $buyerId=$request->buyerId;
        $DH_PID=$request->PIN;
        $buyerProductCode=$request->bpcode;
        $pono_id=$request->pono_id;
        $pono_date=$request->pono_date;
        $pono_date= $pono_date;
        for ($i=0; $i <count($pono_id) ; $i++) {
            pono::insert([
                'pono_id'=>$pono_id[$i],
                'pono_date'=>$pono_date[$i],
                'DH_PID'=>$DH_PID,
            ]);
        }

        $productName = $request->productName;
        $quantity = $request->quantity;
        $unitPrice = $request->unitPrice;
        $totalPrice = $request->totalPrice;
        $grandTotal = $request->grandTotal;
        $totalQuantity = $request->totalQuantity;
        $status = $request->status;
        $delivery_date=$request->delivery_date;
        $buyerscode_id= buyers::where('id', $buyerId)->select('buyerCode')->get()->value('buyerCode');

        for ($i=0; $i <count($productName) ; $i++) {
            mainOrder::insert([
                'buyerId'=>$buyerId,
                'buyerProductCode'=>$buyerProductCode[$i],
                'grandTotal'=>$grandTotal,
                'totalQuantity'=>$totalQuantity,
                'DH_PID'=>$DH_PID,
                'productId'=>$productName[$i],
                'quantity'=>$quantity[$i],
                'buyerscode_id'=>$buyerscode_id,
                'remaing_quantity'=>$quantity[$i],
                'unitPrice'=>$unitPrice[$i],
                'totalPrice'=>$totalPrice[$i],
                'delivery_date'=>$delivery_date,
                'status'=>$status,
           ]);
        }       return redirect('admin/main_order')->with('success','Main Order create successfully');
}


    public function show($oid)
    {

        $order = mainOrder::where('id',$oid)->select('id','quantity','remaing_quantity','productId')->with(['products'])->get();
        return response()->json($order, 200);
    }


    public function edit($id)
    {

       $input=mainOrder::find($id);
    //  $mainorders= mainOrder::with('products')->get();
        $product= pruduct::all();
        return view('admin.mainOrder.edit')->with(['mainorder'=>$input,'product'=>$product]);
    }


    public function update(Request $request, $id)
    {

       $mainorder=mainOrder::find($id);
       $Id = $mainorder->id;
       $quantity = $request->quantity;
       $unitPrice = $request->unitPrice;
       $totalPrice = $request->totalPrice;
       $status = $request->status;

    if($status==0 || $status==1){
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['quantity'=> $quantity,'status' => $status]);
    }
    elseif($status==2){
        $time = Carbon::now()->toDateString();
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'processing'=>$time]);
    }
    elseif($status==3){
        $time = Carbon::now()->toDateString();
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'completed'=>$time]);
    }
    elseif($status==4){
        $time = Carbon::now()->toDateString();
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['partial_delivery_quantity'=> $quantity,'status' => $status,'delivered'=>$time]);
    }
    elseif($status==5){
        $time = Carbon::now()->toDateString();
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'received'=>$time]);
    }
    elseif($status==6){
        $time = Carbon::now()->toDateString();
        DB::table('main_orders')
        ->where('Id',$id)
        ->update(['quantity'=> $quantity,'status' => $status,'approved'=>$time]);
    }


    //    $input=([
    //     'productId'=>$productId,
    //     'quantity'=>$quantity,
    //     'remaing_quantity'=>$quantity,
    //     'unitPrice'=>$unitPrice,
    //     'totalPrice'=>$totalPrice,
    //     'status'=>$status,
    //    ]);
    //    $mainorder->update($input);
       return redirect('admin/main_order')->with(['update'=>'Your Main Order is Updated']);
    }


    public function destroy($id)
    {
        mainOrder::destroy($id);
        return redirect('admin/main_order')->with('delete', 'Main Order has been deleted');
    }
}

