<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\packorderFormValidation;
use App\Models\packaging;
use App\Models\packOrder;
use App\Models\warehouse;
use Illuminate\Http\Request;
use App\Models\PackageingCompany;
use App\Models\packSize;

class PackOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packorder=packOrder::all();
        return view('admin.packOrder.index')->with('packorder',$packorder);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packSize=packSize::all();
        $pack= PackageingCompany::all();
        $mainOrder = packOrder::all();
        return view('admin.packOrder.create')->with(['pack'=> $pack,'packSize'=>$packSize ,'mainOrder'=> $mainOrder]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(packorderFormValidation $request)
    {
        $input= $request->all();
        packOrder::create($input);
        return redirect('admin/pack_order')->with('success','Package Order created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\packOrder  $packOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = packOrder::find($id);
        return view('admin.packOrder.show')->with('pack',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\packOrder  $packOrder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packorder=packOrder::find($id);
        return view('admin.packOrder.edit')->with('packorder',$packorder);
    }


    public function update(packorderFormValidation $request, $id)
    {
        $packorder=packOrder::find($id);
        $input= $request->all();
        $packorder->update($input);
        return redirect('admin/pack_order')->with(['update'=>'Your Package Order is Updated']);
    }


    public function destroy($id)
    {
        packOrder::destroy($id);
        return redirect('admin/pack_order')->with('delete', 'Package Order has been deleted');
    }
}
