<?php

namespace App\Http\Controllers;

use App\Http\Requests\assainOrderFormValidation;
use App\Models\assainedOrder;
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
        return view('admin.assainedOrder.create');
    }


    public function store(assainOrderFormValidation $request)
    {
        $input=$request->all();
        assainedOrder::create($input);
        return redirect('assain_order')->with('status','Assign Order create successfully');
    }


    public function show(assainedOrder $assainedOrder)
    {
        //
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
       return redirect('assaign_order')->with('flash_message','Assign Ordered value Updated');
    }


    public function destroy($id)
    {
        assainedOrder::destroy($id);
        return redirect('assaign_order')->with('status', 'Assign Ordered has been deleted');
    }
}
