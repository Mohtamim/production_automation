<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\unitFormValidation;
use App\Models\unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function index()
    {
        $unit= unit::all();
        return view('admin.unit.index')->with('unit', $unit);
    }


    public function create()
    {
        return view('admin.unit.create') ;
    }


    public function store(unitFormValidation $request)
    {
        $input= $request->all();
        unit::create($input);
        return redirect('admin/unit')->with('success','Unit created successfully');
    }


    public function show(unit $unit)
    {
        //
    }


    public function edit($id)
    {
        $unit = unit::find($id);
        return view('admin.unit.edit')->with('unit',$unit);
    }


    public function update(unitFormValidation $request, $id)
    {
        $unit = unit::find($id);
        $input = $request->all();
        $unit->update($input);
        return redirect('admin/unit')->with(['update'=>'Your Unit is Updated']);
    }


    public function destroy($id)
    {
        
        unit::destroy($id);
        return redirect('admin/unit')->with('delete', 'Unit has been deleted');
    }
}
