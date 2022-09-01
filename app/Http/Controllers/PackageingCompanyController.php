<?php

namespace App\Http\Controllers;

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


    public function store(Request $request)
    {
        $packCompany=$request->all();
        PackageingCompany::create($packCompany);
        return redirect('admin/packaging_company')->with('status','Packaging Company created Successfully');

    }


    public function show(PackageingCompany $packageingCompany)
    {
        //
    }


    public function edit($id)
    {
     $packCompany=PackageingCompany::find($id);
     return view('admin.packageingCompany.edit')->with('packCompany',$packCompany);
    }


    public function update(Request $request, $id)
    {
        $packCompany=PackageingCompany::all();
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
