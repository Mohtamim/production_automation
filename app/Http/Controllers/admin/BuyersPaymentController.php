<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\buyersPaymentsForm;
use App\Models\buyers;
use App\Models\buyersPayment;
use Illuminate\Http\Request;

class BuyersPaymentController extends Controller
{

    public function index()
    {
        $buyersPayments=buyersPayment::all();
        return view('admin.buyersPayments.index')->with('buyersPayments',$buyersPayments);
    }


    public function create()
    {
        $buyer= buyers::all();
        return view('admin.buyersPayments.create')->with('buyer',$buyer);;
    }


    public function store(buyersPaymentsForm $request)
    {

        $buyerId = $request->buyerId;
        $buyerName = $request->buyerName;
        $buyerCode = $request->buyerCode;
        $email = $request->email;
        $country = $request->country;
        $amount = $request->amount;



            buyersPayment::insert([
                'buyerId'=>$buyerId,
                'buyerName'=>$buyerName,
                'buyerCode'=>$buyerCode,
                'email'=>$email,
                'country'=>$country,
                'amount'=>$amount,
            ]);
        return redirect('admin/buyersPayments')->with('success',' Buyers Payments create successfully');
    }


    public function show(buyersPayment $buyersPayment)
    {

    }


    public function edit($id)
    {
        $input=buyersPayment::find($id);
        return view('admin.buyersPayments.edit')->with(['buyersPayments'=>$input]);
    }


    public function update(Request $request, buyersPayment $buyersPayment)
    {

    }


    public function destroy(buyersPayment $buyersPayment)
    {

    }
}
