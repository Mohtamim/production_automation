<?php

namespace App\Http\Controllers;

use App\Models\packOrder;
use Illuminate\Http\Request;

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
        $packorder = packOrder::all();
        $mainOrder = packOrder::all();
        return view('admin.packOrder.create')->with(['wareHouse'=> $packorder,'mainOrder'=> $mainOrder]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();
        packOrder::create($input);
        return redirect('admin/pack_order')->with('flash_message','Pack Order Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\packOrder  $packOrder
     * @return \Illuminate\Http\Response
     */
    public function show(packOrder $packOrder)
    {
        //
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


    public function update(Request $request, $id)
    {
        $packorder=packOrder::find($id);
        $input= $request->all();
        $packorder->update($input);
        return redirect('admin/pack_order')->with('flash_message','Pack Order Added');
    }


    public function destroy($id)
    {
        packOrder::destroy($id);
        return redirect('admin/pack_order')->with('flash_message','Pack Order deleted');
    }
}
