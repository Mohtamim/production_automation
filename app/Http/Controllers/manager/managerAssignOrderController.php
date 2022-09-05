<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Models\assainedOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\assainOrderFormValidation;

class managerAssignOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input=assainedOrder::all();
        return view('manager.assainedOrder.index')->with('assain',$input);
    }


    public function create()
    {

        return view('manager.assainedOrder.create');
    }


    public function store(assainOrderFormValidation $request)
    {
        $input=$request->all();
        assainedOrder::create($input);
        return redirect('manager/order')->with('status','Assign Order create successfully');
    }


    public function show($id)
    {
        $order = assainedOrder::find($id);
        return view('manager.assainedOrder.show')->with('assain',$order);
    }

    public function edit($id)
    {
       $input=assainedOrder::find($id);
       return view('manager.assainedOrder.edit')->with('assain',$input);
    }


    public function update(assainOrderFormValidation $request, $id)
    {
       $assain=assainedOrder::find($id);
       $input=$request->all();
       $assain->update($input);
       return redirect('manager/order')->with('flash_message','Assign Ordered value Updated');
    }


    public function destroy($id)
    {
        assainedOrder::destroy($id);
        return redirect('manager/order')->with('status', 'Assign Ordered has been deleted');
    }
}
