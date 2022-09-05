<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\assainOrderFormValidation;
use App\Models\assainedOrder;
use App\Models\mainOrder;
use App\Models\warehouse;
use Illuminate\Http\Request;

class AssainedOrderController extends Controller
{

    public function index()
    {
        $input=assainedOrder::all();
        return view('admin.assainedOrder.index')->with('assain',$input);
    }


    public function create()
    {
        $wareHouse = wareHouse::all();
        $mainOrder = mainOrder::all();
        return view('admin.assainedOrder.create')->with(['warehouse'=> $wareHouse,'mainOrder'=> $mainOrder]);
    }


    public function store(assainOrderFormValidation $request)
    {
        $input=$request->all();
        assainedOrder::create($input);
        return redirect('admin/assaign_order')->with('status','Assign Order create successfully');
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
