<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\usersFormValidation;
use App\Models\managerlist;
use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users= users::all();
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

            $data=new managerlist();
            $data->managerId=$managerId;
            $data->managerName=$managerName;
            $data->phone=$phone;
            $data->email=$email;
            $data->save();
        }

        $input= $request->all();
        users::create($input);
        return redirect('admin/users')->with('success','User created successfully');
    }

    public function show(users $users)
    {

    }


    public function edit($id)
    {
        $user = users::find($id);
        return view('admin.user.edit')->with('user',$user);
    }


    public function update(usersFormValidation $request, $id)
    {
        $user = users::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('admin/users')->with(['update'=>'Your User is Updated']);

        }
    public function destroy($id)
    {

        users::destroy($id);
        return redirect('admin/users')->with('delete', 'User has been deleted');
    }
}
