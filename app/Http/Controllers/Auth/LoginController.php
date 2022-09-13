<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    public function loginPage()
    {
       return view('login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'userName' => 'required',
            'password' => 'required|string|min:4'
        ]);

        $credentials = [
            'userName' => $request->userName,
            'password' => $request->password,
        ];

        // login attempt if success then redirect dashboard
        if(Auth::attempt($credentials, $request->filled('remember'))){
            if (auth()->user()->userType == 1) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            }else if (auth()->user()->userType == 2) {
                $request->session()->regenerate();
                return redirect()->intended('manager/dashboard');
            }
            // $request->session()->regenerate();
            // return redirect()->intended('admin/dashboard');
        }

        // return error message
        return back()->withErrors([
            'userName' => 'Wrong Credentials found!'
        ])->onlyInput('userName');

    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
