<?php

namespace App\Http\Controllers;
use App\Models\authUser;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customLoginController extends Controller
{
    public  function index(){
        return view('login');
    }
    public  function login(Request $request){
        $input=$request->all();
        $this->validate($request,[
            'userName'=>'required',
            'password'=>'required',

        ]);
        if(Auth::guard('user')->attempt(['userName'=>$input['userName'],'password'=>$input['password']])){
            return redirect('admin/dashboard');
        }else{
            return redirect()->back()->with('error','Invaalid Username or password');
        }

    }
}
