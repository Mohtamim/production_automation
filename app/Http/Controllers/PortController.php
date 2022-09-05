<?php

namespace App\Http\Controllers;

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
        return redirect('admin/port')->with('flash_message','port Added');
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
        return redirect('admin/port')->with('flash_message', 'port Updated!');
    }


    public function destroy($id)
    {
        port::destroy($id);
        return redirect('admin/port')->with('port', 'port has been deleted');

    }
}
