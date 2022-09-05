<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\portFormValidation;
use App\Models\port;
use Illuminate\Http\Request;

class portController extends Controller
{

    public function index()
    {
        $port=port::all();
        return view('admin.port.index')->with('port', $port);
    }


    public function create()
    {
        return view('admin.port.create') ;
    }


    public function store(portFormValidation $request)
    {
        $input= $request->all();
        port::create($input);
        return redirect('admin/port')->with('success','Port created successfully');
    }


    public function show(port $port)
    {
        //
    }


    public function edit($id)
    {
        $port = port::find($id);
        return view('admin.port.edit')->with('port',$port);
    }


    public function update(portFormValidation $request, $id)
    {
        $port = port::find($id);
        $input = $request->all();
        $port->update($input);
        return redirect('admin/port')->with(['update'=>'Your Port is Updated']);
    }


    public function destroy($id)
    {
        port::destroy($id);
        return redirect('admin/port')->with('delete', 'Port has been deleted');

    }
}
