<?php

use App\Http\Controllers\api\test\checkoutController;
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

Route::post('/customer/signup', [UserController::class,'createCustomer'])->name('register_customer');
Route::post('/merchant/signup', [UserController::class,'createMerchant'])->name('register_merchant');
Route::get('/user/login',[UserController::class,'viewLogin'])->name('login');
Route::post('/login',[UserController::class,'customLogin'])->name('customLogin');





 Route::get('/moblie-conf', function (){
    return view('website/customer/moblie_conf');
});
Route::get('/adderss', function (){
    return view('website/customer/name_adderss');
});
Route::get('/card-info', function (){
    return view('website/customer/card_info');
});
Route::get('/buisness-info', function (){
    return view('website/merchant/buisness_info');
});



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

Route::get('logout', [UserController::class, 'logout'])->name('logout');
      
    // /* New Added Routes */
 Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('dashboard_view')->middleware(['auth', 'is_verify_email']);
 Route::get('account/verify/{token}', [UserController::class, 'verifyAccount'])->name('user.verify'); 
 

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


/*
profile settings
*/ 
Route::get('/settings', function () {
    return view('website/user_profile/settings');
})->name('user_profile');

Route::get('/security', function () {
    return view('website/user_profile/security');
});
Route::get('/privacy', function () {
    return view('website/user_profile/privacy');
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



/* Customer Dashboard Routes */
Route::get('/dashboard', function(){
    //    return view('website/login');

     // Check after login if user is Admin or Merchant or Customer , then show its dashboard
     // if it was a customer

     return view('customer_dashboard/home');
 })->name('dashboard');


 Route::get('/dashboard/invoice' , function(){
     return view('customer_dashboard/invoice');
 })->name('invoice');
 Route::get('getinvoice', [checkoutController::class, 'getinvoice'])->name('getinvoice'); 
 
