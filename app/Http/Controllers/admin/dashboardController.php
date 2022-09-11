<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\warehouse;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $warhouses=warehouse::all();
        return view('admin.dashboard')->with(['warhouses'=>$warhouses]);
    }
}
