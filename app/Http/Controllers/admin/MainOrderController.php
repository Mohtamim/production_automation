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
        $mainorder=mainOrder::all();
        return view('admin.mainOrder.index')->with('mainorder',$mainorder);
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
        $input=$request->all();
        mainOrder::create($input);
        return redirect('admin/main_order')->with('success','Main Order create successfully');
    }


    public function show($id)
    {
        $loadData = DB::table('products')->where('id',$id)->get();
        return response()->json($loadData);
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

