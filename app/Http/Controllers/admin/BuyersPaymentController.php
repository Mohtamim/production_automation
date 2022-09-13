<?php

namespace App\Http\Controllers\admin;

use App\Models\buyers;
use Illuminate\Http\Request;
use App\Models\buyersPayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\buyersPaymentsForm;

class BuyersPaymentController extends Controller
{

    public function index()
    {
        $buyer= DB::table('buyers')->select('buyerCode','buyerName','email','country')->get();
        $buyersPayments=buyersPayment::all();
        return view('admin.buyersPayments.index')->with(['buyersPayments'=>$buyersPayments,'buyer'=>$buyer]);
    }


    public function create()
    {

        $buyerName = buyers::all();
        return view('admin.buyersPayments.create')->with(['buyerName'=>$buyerName]);
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
        return redirect('admin/buyers-payment')->with('success',' Buyers Payments create successfully');
    }


    public function show($id)
    {
        $buyer=buyers::where('id', $id)->select('buyerId', 'buyerCode','email')->get();
       dd($buyer);
        return response()->json($buyer, 200);
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
