<?php

namespace App\Http\Controllers;

use App\Http\Requests\managerlistFormValidation;
use App\Models\mainOrder;
use App\Models\managerlist;
use Illuminate\Http\Request;

class ManagerlistController extends Controller
{

    public function index()
    {
       $manager=managerlist::all();
       return view('admin.manager.index')->with('manager',$manager);
    }


    public function create()
    {
        return view('admin.manager.create');
    }


    public function store(managerlistFormValidation $request)
    {
        $input=$request->all();
        mainOrder::create($input);
        return redirect('admin/main')->with('status','Assign Order create successfully');
    }


    public function show(managerlist $managerlist)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(managerlist $managerlist)
    {
        //
    }
}
