<?php

namespace App\Http\Controllers;

use App\Http\Requests\buyersFormValidation;
use App\Models\buyers;
use Illuminate\Http\Request;

class BuyersController extends Controller
{

    public function index()
    {
        $buyer=buyers::all();
        return view('admin.buyers.index')->with('buyer',$buyer);
    }


    public function create()
    {
       return view('admin.buyers.create');
    }


    public function store(buyersFormValidation $request)
    {
        $buyer=$request->all();
        buyers::create($buyer);
        return redirect('admin/buyers')->with('status','buyers created successfully' );


    }


    public function show(buyers $buyers)
    {
        //
    }


    public function edit($id)
    {
     $buyer=buyers::find($id);
     return view('admin.buyers.edit')->with('buyer',$buyer);
    }


    public function update(buyersFormValidation $request, $id)
    {
        $buyer=$request->find($id);
        $buyer->update($buyer);
        return redirect('admin/buyers')->with('status','buyers updated successfully' );
    }


    public function destroy($id)
    {
        buyers::destroy($id);
       return redirect('admin/buyers')->with('status' ,'Buyers are deleted');
    }
}
