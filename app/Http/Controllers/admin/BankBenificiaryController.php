<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bankBenifiFormValidation;
use App\Http\Requests\shiperandexporterFormValidation;
use App\Models\bankBenificiary;
use App\Models\shiperAndExporter;
use Illuminate\Http\Request;

class BankBenificiaryController extends Controller
{

    public function index()
    {
        $bank_benificiaries=bankBenificiary::all();

        return view('admin.bankBenificiary.index')->with('bank_benificiaries',$bank_benificiaries);
    }


    public function create()
    {
        return view('admin.bankBenificiary.create');
    }


    public function store(bankBenifiFormValidation $request)
    {
        $input= $request->all();
        bankBenificiary::create($input);
        return redirect('admin/bank_benificiary')->with('success','Bank Benificiary created successfully');
    }


    public function show(bankBenificiary $bankBenificiary)
    {
        //
    }


    public function edit($id)
    {
        $bank = bankBenificiary::find($id);
        return view('admin.bankBenificiary.edit')->with('bank',$bank);
    }

   function update(bankBenifiFormValidation $request, $id)
    {
        $bank = bankBenificiary::find($id);
        $input = $request->all();
        $bank->update($input);
        return redirect('admin/bank_benificiary')->with(['update'=>'Your bank_benificiary is Updated']);
    }

    public function destroy($id)
    {
        bankBenificiary::destroy($id);
        return redirect('admin/bank_benificiary')->with('delete' ,'Bank Benificiary has been deleted');
    }
}
