<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\assainedOrder;
use App\Models\buyers;
use App\Models\cat;
use App\Models\mainOrder;
use App\Models\PackageingCompany;
use App\Models\packOrder;
use App\Models\packSize;
use App\Models\pruduct;
use App\Models\unit;
use App\Models\User;
use App\Models\warehouse;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $warhouses=warehouse::count();
        $order=mainOrder::count();
        $users=User::count();
        $packsizes=packSize::count();
        $category=cat::count();
        $product=pruduct::count();
        $unit=unit::count();
        $buyer=buyers::count();
        $pack_order=packOrder::count();
        $package_company=PackageingCompany::count();
        $assignOrder=assainedOrder::count();
        $activeorders = mainOrder::where('status','1')->count();
        $pendingorders = mainOrder::where('status','0')->count();





        return view('admin.dashboard')->with([
            'warhouses'=>$warhouses,
            'order'=>$order,
            'users'=>$users,
            'packsizes'=>$packsizes,
            'category'=>$category,
            'product'=>$product,
            'unit'=>$unit,
            'buyer'=>$buyer,
            'pack_order'=> $pack_order,
             'assignOrder'=>$assignOrder,
             'package_company'=>$package_company,
             'activeorders'=>$activeorders,
             'pendingorders'=>$pendingorders,

        ]);
    }
}
