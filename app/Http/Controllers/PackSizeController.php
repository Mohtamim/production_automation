<?php

namespace App\Http\Controllers;

use App\Models\packSize;
use Illuminate\Http\Request;

class PackSizeController extends Controller
{

    public function index()
    {
       $pack=packSize::all();
       return view('admin.packaging.index')->with('status',$pack);
    }


    public function create()
    {
       return view('admin.packaging.create');
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\packSize  $packSize
     * @return \Illuminate\Http\Response
     */
    public function show(packSize $packSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\packSize  $packSize
     * @return \Illuminate\Http\Response
     */
    public function edit(packSize $packSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\packSize  $packSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, packSize $packSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\packSize  $packSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(packSize $packSize)
    {
        //
    }
}
