<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContuctMe;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

	
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
 
/**
 * register customrs and merchants
 */
Route::post('/customer/register', [UserController::class,'createCustomer'])->name('register_customer');
Route::post('/merchant/register', [UserController::class,'createMerchant'])->name('register_merchant');

Route::get('/user/login',[UserController::class,'viewLogin'])->name('view_login');

Route::post('/login',[UserController::class,'customLogin'])->name('customLogin');


 

Route::get('/', function () {
    return view('website/index');
});

/**
 * Reset password & verity email
 * 
 */
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


   /**
    * Verification Routes
    */



Route::get('/about-us', function () {
    return view('website/about');
});
// contuct form
Route::get('/contuct', function (){
    return view('website/contuct');
});
Route::post('/contuct', function (){
    $data=request(['name','email','subject','message']);
    Mail::to('roor3hakimi@gmail.com')->send(new ContuctMe($data));
    return  redirect('/contuct')
    ->with('flash','تم الارسال بنجاح');
    
});
Route::get('/user-profile', function () {
    return view('website/user_profile');
});




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


