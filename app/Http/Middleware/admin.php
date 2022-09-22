<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Route;
class admin
{
    protected $auth;
    protected $route;


    public function __construct(Guard $auth, Route $route)
    {
        $this->auth = $auth;
        $this->route = $route;
    }

    public function handle(Request $request, Closure $next)
    {
        if($this->auth->user()->userType !=1){
            return redirect()->route('manager.dashboard.index')->with('error', 'A manager can\'t access admin propertise');
            // return new Response('<h1 style="margin-top: 150px;color:dimgray"><center>401<br>ACCESS DENIED</center></h1>', 401);
        }
        return $next($request);
    }
}
