<?php

use App\Models\managerlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\productsfetch;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\portController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\customLoginController;
use App\Http\Controllers\admin\BuyersController;
use App\Http\Controllers\admin\reportController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\PruductController;
use App\Http\Controllers\admin\PackSizeController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\MainOrderController;
use App\Http\Controllers\admin\PackagingController;
use App\Http\Controllers\admin\PackOrderController;
use App\Http\Controllers\admin\WarehouseController;
use App\Http\Controllers\admin\buyersPayment;
use App\Http\Controllers\admin\warehousePayment;

use App\Http\Controllers\manager\invoiceController;
use App\Http\Controllers\manager\managersController;
use App\Http\Controllers\admin\ManagerlistController;
use App\Http\Controllers\admin\PackPricingController;
use App\Http\Controllers\admin\AssainedOrderController;
use App\Http\Controllers\manager\paymentInfoController;
use App\Http\Controllers\admin\BankBenificiaryController;
use App\Http\Controllers\admin\BuyersPaymentController;
use App\Http\Controllers\admin\PackageingCompanyController;
use App\Http\Controllers\admin\ShiperAndExporterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\manager\managerDashboardController;
use App\Http\Controllers\manager\managerAssignOrderController;


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

Route::get('/', [LoginController::class,'showLoginForm']);
Route::POST('/', [customLoginController::class,]);

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin'], function () {
    Route::resource('dashboard', dashboardController::class);
    Route::get('product_fetch/{id}',[productsfetch::class,'show']);
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
    Route::resource('reports', reportController::class);
    Route::resource('buyersPayments',BuyersPaymentController::class);
    Route::resource('warehousePayments',warehousePayment::class);
    Route::resource('reports', reportController::class);

});

Route::group(['prefix' => 'manager','middleware'=>['admin','auth']], function () {
    Route::resource('order',managerAssignOrderController::class);
    Route::resource('dashboard',managerDashboardController::class);
    Route::resource('invoice',invoiceController::class);
    Route::resource('payment_info',paymentInfoController::class);
    Route::resource('managers',managersController::class);
});
