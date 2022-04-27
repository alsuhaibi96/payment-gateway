<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\user\UserController;

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

/**
 * Register and sign in routes 
 */

 Route::get('/user/register',[UserController::class,'viewRegisteration'])->name('registeration');
 Route::get('/customer/register',[UserController::class,'viewCustomerRegister'])->name('customer_register');
 Route::get('/merchant/register',[UserController::class,'viewMerchantRegister'])->name('merchant_register');
 Route::post('/Signin',[UserController::class,'viewRegisterationPage'])->name('Signin');
 

Route::get('/', function () {
    return view('website/index');
})->name('index');




Route::get('/login', function () {
    return view('website/login');
}) -> name('login');

Route::get('/docs', function () {
    return view('docs/docs');
}) -> name('docs');

Route::get('/register', function () {
    return view('website/register');
}) -> name('register');

Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
Route::get('/save_user',[AuthController::class,'register'])->name('save_user');


   


/**
 * Adding roles for the authentication and users
 * You should go to this route every time the database data are lost
 */
Route::get('/generate_roles',[SettingController::class,'generateRoles']);


Route::get('/document', function () {
    return view('docs/docs');
});
Route::get('/checkout', function () {
    return view('docs/checkout');
});
Route::get('/checkout-model', function () {
    return view('docs/checkout_model');
});
Route::get('/create-customer', function () {
    return view('docs/create_customer');
});
Route::get('/customer-model', function () {
    return view('docs/customer_model');
});
Route::get('/customers', function () {
    return view('docs/customers');
});
Route::get('/delete-customer', function () {
    return view('docs/delete_customer');
});
Route::get('/delete-payment-method', function () {
    return view('docs/delete_payment_method');
});
Route::get('/invoice-model', function () {
    return view('docs/invoice_model');
});
Route::get('/list-checkout', function () {
    return view('docs/list_checkout');
});
Route::get('/payment-method-model', function () {
    return view('docs/payment_method_model');
});
Route::get('/payment-method', function () {
    return view('docs/payment_method');
});
Route::get('/payment-model', function () {
    return view('docs/payment_model');
});
Route::get('/payments', function () {
    return view('docs/payments');
});
Route::get('/retrieve-checkout', function () {
    return view('docs/retrieve_checkout');
});
Route::get('/retrieve-customer', function () {
    return view('docs/retrieve_customer');
});

Route::get('/retrieve-payment', function () {
    return view('docs/retrieve_payment');
});

Route::get('/dashboard', function(){
   //    return view('website/login');

    // Check after login if user is Admin or Merchant or Customer , then show its dashboard
    // if it was a customer

    return view('customer_dashboard/home');
})->name('dashboard');