<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\packagingCompanyFormValidation;
use App\Models\PackageingCompany;
use Illuminate\Http\Request;

class PackageingCompanyController extends Controller
{

    public function index()
    {
       $packCompany=PackageingCompany::all();
       return view('admin.packageingCompany.index')->with('packCompany',$packCompany);
    }


    public function create()
    {
        return view('admin.packageingCompany.create');
    }


    public function store(packagingCompanyFormValidation $request)
    {
        $packCompany=$request->all();
        PackageingCompany::create($packCompany);
        return redirect('admin/packaging_company')->with('status','Packaging Company created Successfully');

    }


    public function show($id)
    {
        $order = PackageingCompany::find($id);
        return view('admin.packageingCompany.show')->with('packageingCompany',$order);
    }


    public function edit($id)
    {
     $packCompany=PackageingCompany::find($id);
     return view('admin.packageingCompany.edit')->with('packCompany',$packCompany);
    }


    public function update(packagingCompanyFormValidation $request, $id)
    {
        $packCompany=PackageingCompany::find($id);
        $input=$request->all();
        $packCompany->update($input);
        return redirect('admin/packaging_company')->with('status','Packaging Company updated Successfully');
    }


    public function destroy($id)
    {
        $packCompany=PackageingCompany::destroy($id);
        return redirect('admin/packaging_company')->with('status','Packaging Company deleted Successfully');
    }
}
