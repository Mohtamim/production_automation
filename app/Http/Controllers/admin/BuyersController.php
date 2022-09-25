<?php


namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use App\Models\buyers;
use Illuminate\Http\Request;
use App\Models\buyersPayment;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;
use App\Http\Requests\buyersFormValidation;

class BuyersController extends Controller
{

    public function index()
    {
        $buyer=buyers::all();

        return view('admin.buyers.index')->with('buyer',$buyer);
    }


    public function create()
    {
       return view('admin.buyers.create');
    }


    public function store(buyersFormValidation $request)
    {
        $buyer=$request->all();
        $buyerCode=$request->buyerCode;
        $buyerName=$request->buyerName;
        $email=$request->email;
        $phone=$request->phone;
        $buyerAddress=$request->buyerAddress;
        $buyerbankAddress=$request->buyerbankAddress;
        $balance=$request->balance;
        $img=$request->file('img');
        $img_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);
        $country=$request->country;
        $paydate = Carbon::now();
        // buyers::create($buyer);


        buyers::insert([
             'buyerCode'=>$buyerCode,
             'buyerName'=>$buyerName,
             'email'=>$email,
             'phone'=>$phone,
             'img'=> $img_url,
             'buyerAddress'=> $buyerAddress,
             'buyerbankAddress'=> $buyerbankAddress,
             'country'=> $country,
             'balance'=>$balance
        ]);
          $buyerId= DB::table('buyers')
                ->where('buyerCode', $buyerCode)
                ->get('id')->value('id');
          DB::table('buyers_payments')
                ->insert([
                    'buyerId'=>$buyerId,
                    'buyerName'=>$buyerName,
                    'buyerCode'=>$buyerCode,
                    'email'=>$email,
                    'buyerAddress'=> $buyerAddress,
                    'buyerbankAddress'=> $buyerbankAddress,
                    'paydate'=>$paydate,
                    'country'=>$country,
                    'amount'=>$balance,
                    'note'=>'Initial Balance',
                ]);

        return redirect('admin/buyers')->with('success','Buyers created successfully' );


    }


    public function show($id)
    {
        $order = buyers::find($id);

        return view('admin.buyers.show')->with('buyers',$order);
    }


    public function edit($id)
    {
     $buyer=buyers::find($id);
     return view('admin.buyers.edit')->with('buyer',$buyer);
    }


    public function update(buyersFormValidation $request, $id)
    {

        $buyer=buyers::find($id);
        $buyerCode=$request->buyerCode;
        $buyerName=$request->buyerName;
        $email=$request->email;
        $phone=$request->phone;
        $buyerAddress=$request->buyerAddress;
        $buyerbankAddress=$request->buyerbankAddress;
        $balance=$request->balance;
        $img=$request->file('img');
        $img_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);
        $country=$request->country;
        $input=([
            'buyerCode'=>$buyerCode,
            'buyerName'=>$buyerName,
            'email'=>$email,
            'phone'=>$phone,
            'buyerAddress'=> $buyerAddress,
            'buyerbankAddress'=> $buyerbankAddress,
            'img'=> $img_url,
            'country'=> $country,
            'balance'=>$balance
        ]);
        $buyer->update($input);
        return redirect('admin/buyers')->with(['update'=>'Your Buyer is Updated'] );
    }


    public function destroy($id)
    {
        buyers::destroy($id);
       return redirect('admin/buyers')->with('delete' ,'Buyers has been deleted');
    }
}
