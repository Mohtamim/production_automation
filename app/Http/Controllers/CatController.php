<?php

namespace App\Http\Controllers;

use App\Http\Requests\catsFormValidation;
use App\Models\cat;
use Illuminate\Http\Request;

class CatController extends Controller
{

    public function index()
    {
        $input=cat::all();
        return view('admin.category.index')->with('cat',$input);

    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(catsFormValidation $request)
    {
        $input=$request->all();
        cat::create($input);
        return redirect('admin/category')->with('cat','Category create successfully');
    }
    public function show(cat $cat)
    {

    }

    public function edit($id)
    {
        $input=cat::find($id);
        return view('admin.category.edit')->with('cat',$input);
    }

    public function update(catsFormValidation $request, $id)
    {
        $assain=cat::find($id);
        $input=$request->all();
        $assain->update($input);
        return redirect('admin/category')->with('flash_message','Category value Updated');
    }


    public function destroy($id)
    {
        cat::destroy($id);
        return redirect('admin/category')->with('status', 'Category has been deleted');
    }
}
