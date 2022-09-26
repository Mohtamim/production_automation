<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\materialCategoryForm;
use App\Models\materialCategory;
use Illuminate\Http\Request;

class MaterialCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $matCat=materialCategory::all();
        return view('admin.materialCategory.index')->with('matCat',$matCat);


    }

    public function create()
    {
        return view('admin.materialCategory.create');
    }

    public function store(materialCategoryForm $request)
    {
        materialCategory::create(
            $request->only([
                'materailName',
                'quantity',
                'unitPrice',
                'totalPrice',


            ])
            );

        // $input=$request->all();
        // materialCategory::create($input);
        return redirect('admin/material_category')->with('success','Category create successfully');
    }
    public function show($oid)
    {
        $matcat = materialCategory::where('id',$oid)->select('id','quantity')->with(['material_category'])->get();
        return response()->json($matcat, 200);
    }

    public function edit($id)
    {
        $matCat=materialCategory::find($id);
        return view('admin.materialCategory.edit')->with(['matCat'=>$matCat]);
    }

    public function update(materialCategoryForm $request, $id)
    {
        $assain=materialCategory::find($id);
        $matCat=$request->all();
        $assain->update($matCat);
        return redirect('admin/material_category')->with(['update'=>'Your category is Updated']);
    }


    public function destroy($id)
    {
        materialCategory::destroy($id);
        return redirect('admin/material_category')->with('delete', 'Category has been deleted');
    }
}
