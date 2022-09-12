<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\mainOrderFormValidation;
use App\Models\mainOrder;
use App\Models\pruduct;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class MainOrderController extends Controller
{

    public function index()
    {
        $mainorders= mainOrder::with('products')->get();
        return view('admin.mainOrder.index',compact('mainorders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product= pruduct::all();

       return view('admin.mainOrder.create')->with('product',$product);
    }


    public function store(mainOrderFormValidation $request)
    {
        $productName = $request->productName;
        $quantity = $request->quantity;
        $unitPrice = $request->unitPrice;
        $totalPrice = $request->totalPrice;
        $status = $request->status;

        mainOrder::insert([
            'productId'=>$productName,
            'quantity'=>$quantity,
            'remaing_quantity'=>$quantity,
            'unitPrice'=>$unitPrice,
            'totalPrice'=>$totalPrice,
            'status'=>$status,
       ]);
        return redirect('admin/main_order')->with('success','Main Order create successfully');
    }


    public function show($oid)
    {

        $order = mainOrder::where('id',$oid)->select('id','quantity','remaing_quantity','productId')->with(['products'])->get();
        return response()->json($order, 200);
    }


    public function edit($id)
    {

       $input=mainOrder::find($id);
    //    $mainorders= mainOrder::with('products')->get();
        $product= pruduct::all();
        return view('admin.mainOrder.edit')->with(['mainorder'=>$input,'product'=>$product]);
    }


    public function update(mainOrderFormValidation $request, $id)
    {
       $mainorder=mainOrder::find($id);
       $productName = $request->productName;
       $quantity = $request->quantity;
       $unitPrice = $request->unitPrice;
       $totalPrice = $request->totalPrice;
       $status = $request->status;


       $input=([
        'productId'=>$productName,
        'quantity'=>$quantity,
        'remaing_quantity'=>$quantity,
        'unitPrice'=>$unitPrice,
        'totalPrice'=>$totalPrice,
        'status'=>$status,
       ]);
       $mainorder->update($input);
       return redirect('admin/main_order')->with(['update'=>'Your Main Order is Updated']);
    }


    public function destroy($id)
    {
        mainOrder::destroy($id);
        return redirect('admin/main_order')->with('delete', 'Main Order has been deleted');
    }
}

