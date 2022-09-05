<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\packSizeFormValidation;
use App\Models\packSize;
use Illuminate\Http\Request;

class PackSizeController extends Controller
{

    public function index()
    {
       $pack=packSize::all();
       return view('admin.packSize.index')->with('assain',$pack);
    }


    public function create()
    {
       return view('admin.packSize.create');
    }


    public function store(packSizeFormValidation $request)
    {
       $pack=$request->all();
       packSize::create($pack);
       return redirect('admin/pack_size')->with('status','Pack Size created Successfully');

    }


    public function show(packSize $packSize)
    {
        //
    }


    public function edit($id)
    {
     $pack=packSize::find($id);
     return view('admin.packSize.edit')->with('pack',$pack);
    }


    public function update(packSizeFormValidation $request, $id)
    {
        $pack=packSize::find($id);
        $input=$request->all();
        $pack->update($input);
        return redirect('admin/pack_size')->with('status','Pack Size created Successfully');
    }


    public function destroy($id)
    {
       $pack=packSize::destroy($id);
       return redirect('admin/pack_size')->with('status','pack size deleted successfully');

    }
}
