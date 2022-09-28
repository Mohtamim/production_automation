<?php
// namespace App\Http\Controllers;


namespace App\Http\Controllers\manager;
use App\Http\Controllers\Controller;
use App\Models\suppliers;
use App\Models\warehouse;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierFormV;

class supplier extends Controller
{
    public function index()
    {
        $warehouse= warehouse::all();
        $suppliers=suppliers::all();
        return view('manager.supplier.index')->with(['warehouse'=>$warehouse,'suppliers'=>$suppliers]);
    }



    public function show($id)
    {
        $suppliers = suppliers::find($id);
        return view('manager.supplier.show')->with('suppliers',$suppliers);
    }


    public function edit($id)
    {
        $warehouse= warehouse::all();
        $suppliers=suppliers::find($id);
        return view('manager.supplier.edit')->with(['warehouse'=>$warehouse,'suppliers'=>$suppliers]);
    }


    public function update(SupplierFormV $request, $id)
    {

       $suppliers=suppliers::find($id);
       $input=$request->all();
       $suppliers->update($input);
       return redirect('admin/supplier')->with(['update'=>'Your suppliers is Updated']);
    }


    public function destroy($id)
    {
        suppliers::destroy($id);
        return redirect('admin/supplier')->with('delete', 'suppliers has been deleted');
    }
}
