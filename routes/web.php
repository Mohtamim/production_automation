<?php

use App\Http\Controllers\admin\AssainedOrderController;
use App\Http\Controllers\admin\BankBenificiaryController;
use App\Http\Controllers\admin\BuyersController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\MainOrderController;
use App\Http\Controllers\admin\ManagerlistController;
use App\Http\Controllers\admin\PackageingCompanyController;
use App\Http\Controllers\admin\PackagingController;
use App\Http\Controllers\admin\PackOrderController;
use App\Http\Controllers\admin\PackPricingController;
use App\Http\Controllers\admin\PruductController;
use App\Http\Controllers\admin\PackSizeController;
use App\Http\Controllers\admin\portController;
use App\Http\Controllers\admin\ShiperAndExporterController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\WarehouseController;
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
    Route::resource('dashboard',dashboardController ::class);
    Route::resource('assaign_order', AssainedOrderController::class);
    Route::resource('users', UsersController::class);
    Route::resource('country', CountryController::class);
    Route::resource('bank_benificiary', BankBenificiaryController::class);
    Route::resource('buyers', BuyersController::class);
    Route::resource('category', CatController::class);
    Route::resource('main_order', MainOrderController::class);
    Route::resource('managers', ManagerlistController::class);
    Route::resource('packaging', PackagingController::class);
    Route::resource('port',portController::class);
    Route::resource('shiperment_exporter', ShiperAndExporterController::class);
    Route::resource('warehouses', WarehouseController::class);
    Route::resource('product',PruductController::class);
    Route::resource('unit',UnitController::class);
    Route::resource('pack_size', PackSizeController::class);
    Route::resource('packaging_company', PackageingCompanyController::class);
    Route::resource('pack_order', PackOrderController::class);
    Route::resource('pack_price', PackPricingController::class);

});
