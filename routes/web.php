<?php

use App\Http\Controllers\AssainedOrderController;
use App\Http\Controllers\BankBenificiaryController;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MainOrderController;
use App\Http\Controllers\ManagerlistController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\ShiperAndExporterController;
use App\Http\Controllers\SubCatController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('admin.layout');
    });
    Route::resource('assaign_order', AssainedOrderController::class);
    Route::resource('users', UsersController::class);
    Route::resource('country', CountryController::class);
    Route::resource('bank_benificiary', BankBenificiaryController::class);
    Route::resource('buyers', BuyersController::class);
    Route::resource('category', CatController::class);
    Route::resource('main_order', MainOrderController::class);
    Route::resource('managers', ManagerlistController::class);
    Route::resource('packaging', PackagingController::class);
    Route::resource('port', PackagingController::class);
    Route::resource('shiperment_exporter', ShiperAndExporterController::class);
    Route::resource('sub_category', SubCatController::class);
    Route::resource('warehouses', WarehouseController::class);
});
