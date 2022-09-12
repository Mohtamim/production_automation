<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\usersFormValidation;
use App\Models\User;
use App\Models\managerlist;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index()
    {
        $users= User::all();
        return view('admin.user.index')->with('users', $users);
    }

    public function create()
    {
        return view('admin.user.create');

    }

    public function store(usersFormValidation $request)
    {

        $userType= $request->userType;

        if($userType==2){
            $firstName= $request->firstName;
            $lastName= $request->lastName;
            $managerName= $firstName.' '.$lastName;
            $managerId= $request->userId;
            $email= $request->email;
            $phone= $request->phone;
            $userName= $request->userName;

            $data=new managerlist();
            $data->managerId=$managerId;
            $data->managerName=$managerName;
            $data->phone=$phone;
            $data->email=$email;
            $data->userName=$userName;
            $data->save();
        }

        $input= $request->all();
        User::create($input);
        return redirect('admin/users')->with('success','User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')->with('user',$user);
    }


    public function update(Request $request, $id)
    {

        
        $user = User::find($id);
            $userType1= User::where('id', $user );
         $userType1=$userType1->userType;
        $userType= $request->userType;
        $input = $request->all();
        dd($userType==$userType1);
        if($userType==$userType1){
            $user->update($input);
            return redirect('admin/users')->with(['update'=>'Your User is Updated']);
        }
       
        return back()->with(['update'=>'Your User is Updated']);
        }
    public function destroy($id)
    {

        User::destroy($id);
        return redirect('admin/users')->with('delete', 'User has been deleted');
    }
}
