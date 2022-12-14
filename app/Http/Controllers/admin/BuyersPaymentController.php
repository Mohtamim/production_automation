<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
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
        return view('admin.buyersPayments.create')->with('buyerName',$buyerName);
    }


    public function store(buyersPaymentsForm $request)
    {

        $buyerId = $request->buyerId;
        $buyerName = $request->buyerName;
        $buyerCode = $request->buyerCode;
        $email = $request->email;
        $paydate = Carbon::now();
        $country = $request->country;
        $amount = $request->amount;
        $note = $request->note;
        $balance= DB::table('buyers')
                ->where('id', $buyerId)
                ->get('balance')->value('balance');

        $total= $balance + $amount;
        DB::table('buyers')
                ->where('id', $buyerId)
                ->update(['balance' => $total]);


        buyersPayment::insert([
            'buyerId'=>$buyerId,
            'buyerName'=>$buyerName,
            'buyerCode'=>$buyerCode,
            'email'=>$email,
            'paydate'=>$paydate,
            'country'=>$country,
            'amount'=>$amount,
            'note'=>$note,
            'balance'=> $total
        ]);

        // buyersPayment::create(
        //     $request->only([
        //         'buyerId',
        //         'buyerName',
        //         'buyerCode',
        //         'email',
        //         'country',
        //         'amount',
        //     ])
        // );

        return redirect('admin/buyers-payments')->with('success',' Buyers Payments create successfully');
    }

    public function show($id)
    {
        $buyer = buyers::find($id);

        return response()->json($buyer, 200);
    }

    public function edit($id)
    {
        $buyers = buyers::all();

        $buyerPayment = buyersPayment::find($id);

        return view('admin.buyersPayments.edit', compact('buyers', 'buyerPayment'));
    }

    public function update(Request $request, buyersPayment $buyersPayment)
    {
        $buyersPayment->update(
            $request->only([
                'buyerId',
                'buyerName',
                'buyerCode',
                'email',
                'country',
                'amount',
            ])
        );

        return redirect('admin/buyers-payments')->with('success',' Buyers Payments update successfully');
    }


    public function destroy(buyersPayment $buyersPayment)
    {

    }
}
