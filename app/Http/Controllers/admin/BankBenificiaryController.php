<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bankBenifiFormValidation;
use App\Models\bankBenificiary;
use Illuminate\Http\Request;

class BankBenificiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank_benificiaries=bankBenificiary::all();

        return view('admin.bankBenificiary.index')->with('bank_benificiaries',$bank_benificiaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bankBenificiary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();
        bankBenificiary::create($input);
        return redirect('admin/bank_benificiary')->with('success','Bank Benificiary created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bankBenificiary  $bankBenificiary
     * @return \Illuminate\Http\Response
     */
    public function show(bankBenificiary $bankBenificiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bankBenificiary  $bankBenificiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = bankBenificiary::find($id);
        return view('admin.bankBenificiary.edit')->with('bank',$bank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bankBenificiary  $bankBenificiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bank = bankBenificiary::find($id);
        $input = $request->all();
        $bank->update($input);
        return redirect('admin/bank_benificiary')->with(['update'=>'Your bank_benificiary is Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bankBenificiary  $bankBenificiary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        bankBenificiary::destroy($id);
        return redirect('admin/bank_benificiary')->with('delete' ,'Bank Benificiary has been deleted');
    }
}
