<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\shiperandexporterFormValidation;
use App\Models\shiperAndExporter;
use Illuminate\Http\Request;

class ShiperAndExporterController extends Controller
{


    public function index()
    {
        $shiperment_exporter=shiperAndExporter::all();
        return view('admin.shippingExport.index')->with('shiperment_exporter', $shiperment_exporter);
    }



    public function create()
    {
        return view('admin.shippingExport.create');
    }



    public function store(Request $request)
    {
        $input= $request->all();
        shiperAndExporter::create($input);
        return redirect('admin/shiperment_exporter')->with('success','Shiperment Exporter created successfully');
    }



    public function show($id)
    {
        $shiperment_exporter = shiperAndExporter::find($id);

        return view('admin.shippingExport.show')->with('shiperment_exporter',$shiperment_exporter);
    }



    public function edit($id)
    {
        $shiperment_exporter = shiperAndExporter::find($id);
        return view('admin.shippingExport.edit')->with('shiperment_exporter',$shiperment_exporter);
    }



    public function update(Request $request, $id)
    {
        $shiper = shiperAndExporter::find($id);
        $input = $request->all();
        $shiper->update($input);
        return redirect('admin/shiperment_exporter')->with(['update'=>'Your Shiperment Exporter is Updated']);
    }


    public function destroy($id)
    {
        shiperAndExporter::destroy($id);
        return redirect('admin/shiperment_exporter')->with('delete', 'Shiperment Exporter has been deleted');
    }
}
