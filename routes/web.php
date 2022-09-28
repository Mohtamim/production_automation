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
// use App\Http\Controllers\manager\invoiceController;
use App\Http\Controllers\manager\managersController;
use App\Http\Controllers\admin\ManagerlistController;
use App\Http\Controllers\admin\PackPricingController;
use App\Http\Controllers\admin\AssainedOrderController;
use App\Http\Controllers\manager\paymentInfoController;
use App\Http\Controllers\admin\BankBenificiaryController;
use App\Http\Controllers\admin\BuyerReportsController;
use App\Http\Controllers\admin\BuyersPaymentController;
use App\Http\Controllers\admin\MaterialCategoryController;
use App\Http\Controllers\admin\PackageingCompanyController;
use App\Http\Controllers\admin\ShiperAndExporterController;
use App\Http\Controllers\admin\TermsConditionController;
use App\Http\Controllers\admin\WarehousePaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\manager\managerDashboardController;
use App\Http\Controllers\manager\managerAssignOrderController;
use App\Http\Controllers\admin\warehouseReportController;
use App\Http\Controllers\assaignOrderReport;
use App\Http\Controllers\Assaignordersfetch;
use App\Http\Controllers\admin\DhDetailsController;
use App\Http\Controllers\orderReport;
use App\Http\Controllers\ordersfetch;
use App\Http\Controllers\proformaInvoice;
use App\Http\Controllers\manager\supplier;
use GuzzleHttp\Middleware;

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

// Route::get('/', [LoginController::class,'showLoginForm']);
// Route::POST('/', [customLoginController::class,]);

// Auth::routes();

// Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/',[LoginController::class,'loginPage'])->name('loginpage');
Route::post('/',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function(){
    Route::resource('dashboard', dashboardController::class);
    Route::get('product_fetch/{id}',[productsfetch::class,'show']);
    Route::get('order_fetch/{id}',[ordersfetch::class,'show']);
    Route::get('assaign_order_fetch/{id}',[Assaignordersfetch::class,'show']);
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
    Route::resource('buyers-payments',BuyersPaymentController::class);
    Route::resource('warehouse_payments',WarehousePaymentController::class);
    Route::resource('buyers_reports',BuyerReportsController::class);
    Route::get('main_order_reports',[orderReport::class,'index']);
    Route::get('assaign_order_reports',[assaignOrderReport::class,'index']);
    Route::get('main_order_reports/{id}',[orderReport::class,'show']);
    Route::get('assaign_order_reports/{id}',[assaignOrderReport::class,'show']);
    Route::resource('warehouse_report',warehouseReportController::class);
    Route::resource('material_category',MaterialCategoryController::class);
    Route::resource('terms-condition',TermsConditionController::class);
    Route::resource('dh-details',DhDetailsController::class);
    Route::get('poroforma-invoice',[proformaInvoice::class,'index']);
    Route::get('poroforma-invoice/{id}',[proformaInvoice::class,'pidata']);

});
// Route::group(['prefix' => 'admin','middleware'=>['admin','auth']], function () {



// });

Route::prefix('manager')->name('manager.')->middleware(['auth', 'manager'])->group(function(){
    Route::resource('order',managerAssignOrderController::class);
    Route::resource('dashboard',managerDashboardController::class);
    Route::resource('invoice',invoiceController::class);
    Route::resource('payment_info',paymentInfoController::class);
    Route::resource('managers',managersController::class);
    Route::resource('supplier',supplier::class);
});
