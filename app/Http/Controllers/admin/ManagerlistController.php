<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\mainOrder;
use App\Models\warehouse;
use App\Models\managerlist;
use Illuminate\Http\Request;
use App\Http\Requests\managerlistFormValidation;

class ManagerlistController extends Controller
{

    public function index()
    {
        $warehouse= warehouse::all();
        $manager=managerlist::all();
     return view('admin.manager.index')->with(['warehouse'=>$warehouse,'manager'=>$manager]);
    }


    public function create()
    {

    }


    public function store(managerlistFormValidation $request)
    {

    }


    public function show($id)
    {
        $manager = managerlist::find($id);
        return view('admin.manager.show')->with('manager',$manager);
    }


    public function edit($id)
    {
        $warehouse= warehouse::all();
        $manager=managerlist::find($id);
        return view('admin.manager.edit')->with(['warehouse'=>$warehouse,'manager'=>$manager]);
    }


    public function update(managerlistFormValidation $request, $id)
    {

       $manager=managerlist::find($id);
       $input=$request->all();
       $manager->update($input);
       return redirect('admin/managers')->with('status','Warehouse Manager updated');
    }


    public function destroy($id)
    {
        managerlist::destroy($id);
        return redirect('admin/managers')->with('status','Warehouse Manager Deleted');
    }
}
