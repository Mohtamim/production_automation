<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\buyersFormValidation;
use App\Models\buyers;
use Illuminate\Http\Request;

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
        $img=$request->file('img');
        $img_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $img_url='upload/'.$img_name;
        $img->move(public_path('upload'),$img_name);
        $country=$request->country;
        // buyers::create($buyer);
        buyers::insert([
             'buyerCode'=>$buyerCode,
             'buyerName'=>$buyerName,
             'email'=>$email,
             'phone'=>$phone,
             'img'=> $img_url,
             'country'=> $country
        ]);
        return redirect('admin/buyers')->with('success','Buyers created successfully' );


    }


    public function show(buyers $buyers)
    {
        //
    }


    public function edit($id)
    {
     $buyer=buyers::find($id);
     return view('admin.buyers.edit')->with('buyer',$buyer);
    }


    public function update(buyersFormValidation $request, $id)
    {

        $buyer=buyers::find($id);
        $input=$request->all();
        $buyer->update($input);
        return redirect('admin/buyers')->with(['update'=>'Your Buyer is Updated'] );
    }


    public function destroy($id)
    {
        buyers::destroy($id);
       return redirect('admin/buyers')->with('delete' ,'Buyers has been deleted');
    }
}
