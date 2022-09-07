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
        $products = DB::table('main_orders')
            ->leftJoin('pruducts', 'main_orders.id', '=', 'pruducts.id')
            ->get();

        return view('admin.mainOrder.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $product= pruduct::all();
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
        // $loadData = DB::table('products')->where('id',$id)->get();
        // return response()->json($loadData);
        $order = mainOrder::where('id',$oid)->select('id','quantity','remaing_quantity','productName')->get();

        return response()->json($order, 200);
    }


    public function edit($id)
    {
       $input=mainOrder::find($id);
       return view('admin.mainOrder.edit')->with('mainorder',$input);
    }


    public function update(mainOrderFormValidation $request, $id)
    {
       $mainorder=mainOrder::find($id);
       $input=$request->all();
       $mainorder->update($input);
       return redirect('admin/main_order')->with(['update'=>'Your Main Order is Updated']);
    }


    public function destroy($id)
    {
        mainOrder::destroy($id);
        return redirect('admin/main_order')->with('delete', 'Main Order has been deleted');
    }
}

