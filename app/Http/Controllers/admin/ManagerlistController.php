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
       return redirect('admin/managers')->with(['update'=>'Your Manager is Updated']);
    }


    public function destroy($id)
    {
        managerlist::destroy($id);
        return redirect('admin/managers')->with('delete', 'Manager has been deleted');
    }
}
