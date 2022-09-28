<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DhDetailsForm;
use App\Models\dhDetails;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DhDetailsController extends Controller
{

    public function index()
    {
     $dhDetails=dhDetails::all();
     return view('admin.DhDetails.index',compact('dhDetails')) ;
    }


    public function create()
    {
        return view('admin.DhDetails.create');
    }


    public function store(DhDetailsForm $request)
    {
     $dh_name=$request->dh_name;
     $registered_office=$request->registered_office;
     $present_address=$request->present_address;
     $telephone=$request->telephone;
     $fax=$request->fax;
     $email=$request->email;
     $website=$request->website;
     $logo=$request->logo;
     $logo = $request->file('logo');
     $logo_name= hexdec(uniqid()). '.' .$logo->getClientOriginalExtension();
     $logo_url='upload/'.$logo_name;
     $logo->move(public_path('upload'),$logo_name);
     dhDetails::insert([
     'dh_name'=>$dh_name,
     'registered_office'=>$registered_office,
     'present_address'=>$present_address,
     'telephone'=>$telephone,
     'fax'=>$fax,
     'email'=>$email,
     'website'=>$website,
     'logo'=>$logo_url,

    ]);
    return redirect('admin/dh-details')->with('success','DH Details created successfully');
    }


    public function show($id)
    {
        $dhDetails=dhDetails::find($id);
        return view('admin.DhDetails.show',compact('dhDetails'));
    }


    public function edit($id)

    {
     $dhDetails=dhDetails::find($id);
      return view('admin.DhDetails.edit',compact('dhDetails'));
    }


    public function update(DhDetailsForm $request, $id)
    {
        $dhDetails=dhDetails::find($id);
        $dh_name=$request->dh_name;
        $registered_office=$request->registered_office;
        $present_address=$request->present_address;
        $telephone=$request->telephone;
        $fax=$request->fax;
        $email=$request->email;
        $website=$request->website;
        $logo=$request->logo;
        $logo = $request->file('logo');
        $logo_name= hexdec(uniqid()). '.' .$logo->getClientOriginalExtension();
        $logo_url='upload/'.$logo_name;
        $logo->move(public_path('upload'),$logo_name);
      $input=[
        'dh_name'=>$dh_name,
        'registered_office'=>$registered_office,
        'present_address'=>$present_address,
        'telephone'=>$telephone,
        'fax'=>$fax,
        'email'=>$email,
        'website'=>$website,
        'logo'=>$logo_url ];
       $dhDetails->update($input);
       return redirect('admin/dh-details')->with('success','DH Details Update has been successfully');
       }



    public function destroy($id)
    {
        dhDetails::destroy($id);
        return redirect('admin/dh-details')->with('success','DH Details Deleted has been successfully');
    }
}
