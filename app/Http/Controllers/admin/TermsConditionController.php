<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\termsConditionForm;
use App\Models\termsCondition;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{


    public function index()
    {
        $termsConditions=termsCondition::all();
        return view('admin.invoice.TermsConditions.index',compact('termsConditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoice.TermsConditions.create');
    }

    public function store(termsConditionForm $request)
    {
       termsCondition::create($request->only([
        'name',
        'details'

       ]));
        return redirect('admin/terms-condition')->with('success','Category create successfully');
    }


    public function show(termsCondition $termsCondition)
    {

    }


    public function edit($id)
    {
        $input=termsCondition::find($id);
        return view('admin.invoice.TermsConditions.edit')->with(['termsConditions'=>$input]);
    }


    public function update(termsConditionForm $request, $id)
    {

       $termsConditions=termsCondition::find($id);
       $input=$request->all();
       $termsConditions->update($input);
       return redirect('admin/terms-condition')->with(['update'=>'Your Condition is Updated']);
    }


    public function destroy($id)
    {
        termsCondition::destroy($id);
        return redirect('admin/terms-condition')->with('delete', 'Conditions has been deleted');
    }
}
