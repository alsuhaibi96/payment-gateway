<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContuctMe;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\API\test\checkoutController;
use App\Http\Controllers\user\UserProfileController;



use App\Http\Controllers\Auth\ForgotPasswordCustomController;


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

Route::get('/user/login',[UserController::class,'viewLogin'])->name('login');
Route::post('/login',[UserController::class,'customLogin'])->name('customLogin');








/* Index Routes */
Route::get('/', function () {
    return view('website/index');
})->name('index');

/**
 * Reset password & verity email
 *
*/
Route::get('forget-password', [ForgotPasswordCustomController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordCustomController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordCustomController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordCustomController::class, 'submitResetPasswordForm'])->name('reset.password.post');


   /**
    * Verification Routes
    */



    // /* New Added Routes */
 Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('dashboard_view')->middleware(['auth', 'is_verify_email']);
 Route::get('account/verify/{token}', [UserController::class, 'verifyAccount'])->name('user.verify');



Route::get('/about-us', function () {
    return view('website/about');
});
// contuct form
Route::get('/contact', function (){
    return view('website/contuct');
})->name('contact-us');

Route::post('/contact', function (){
    $data=request(['name','email','subject','message']);
    Mail::to('mail@waslpayment.com')->send(new ContuctMe($data));
    return  redirect()->route('contact-us')
    ->with('flash','تم الارسال بنجاح');

})->name('send_contact_message');


// new docs
Route::get('/new-docs', function() {
return view('new-docs.index');
}); 
Route::get('/new-docs/card', function() {
return view('new-docs.card');
}); 
Route::get('/new-docs/checkout', function() {
return view('new-docs.checkout');
}); 

Route::get('/document', function () {
    return view('docs/docs');
})->name('docs');
Route::get('/checkout', function () {
    return view('docs/checkout');
})->name('checkout');
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

Route::get('/test-card', function () {
    return view('docs.wasl_test_card');
})->name('test_card');

Route::group(['middleware'=>['auth']],function(){

    
/**
 * Adding roles for the authentication and users
 * You should go to this route every time the database data are lost
 */
Route::get('/generate_roles',[SettingController::class,'generateRoles']);

    
//This route is calling the method transfering money
Route::post('money/transfer',[CustomerController::class,'transferMoney'])->name('transfer_money');


Route::get('/moblie-conf', function (){
    return view('website/customer/moblie_conf');
});
Route::get('/adderss', function (){
    return view('website/customer/name_adderss');
});

Route::get('/buisness-info', function (){
    return view('website/merchant/buisness_info');
});



    // Route::get('/customer_dashboard', function(){
    //     return view('customer_dashboard/home');
    // })->name('home');
    Route::get('/customer_dashboard', [UserProfileController::class,'Profile']
    )->name('customer_dashboard');

    /*profile edit */

    Route::post('/customer_dashboard/deposit', [UserProfileController::class,'addProfile']
    )->name('addProfile');
    Route::post('/customer_dashboard/edit', [UserProfileController::class,'editProfile']
    )->name('editProfile');
    
   
    
/*********** Customer Dashboard Routes *************/
//add balance show
Route::get('/customer_dashboard/add_balance', function(){
    return view('customer_dashboard/addBalance');
})->name('addBalance');
//transaction show
Route::get('/customer_dashboard/transaction', function(){
    return view('customer_dashboard/transaction');
})->name('transaction');


/*   funds transfer */

Route::get('/customer_dashboard/transfer', function(){
    return view('customer_dashboard/transfer');
})->name('transfer');
/*FAQ page route*/

Route::get('/customer_dashboard/report', function(){
    return view('customer_dashboard/report');
})->name('report');
/*
profile settings
*/
Route::get('/customer_dashboard/settings', function(){
    return view('customer_dashboard/settings');
})->name('settings');
Route::post('/customer_dashboard/editImage', [UserProfileController::class,'editImage'])->name('editImage');

/***************change password****************/
Route::get('/change-password', [App\Http\Controllers\user\ChangePasswordController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\user\ChangePasswordController::class, 'updatePassword'])->name('update-password');




 /********** Merchant Dashboard Routes *************/
 Route::get('/merchant_dashboard', function(){
    return view('merchant_dashboard/home');
})->name('merchant_dashboard');

 Route::get('/merchant_dashboard/invoice' , function(){
     return view('merchant_dashboard/invoice');
 })->name('invoice');


// admin dashboard
Route::get('/admin_dashboard', function(){

    return view('admin_dashboard/home');
})->name('admin_dashboard');




Route::get('/admin/dashboard/deposit', function(){
    return view('admin_dashboard/deposit');
})->name('admin_dashboard/deposit');

Route::get('/admin/dashboard/addBalance', function(){
    return view('admin_dashboard/addBalance');
})->name('admin_dashboard/addBalance');

Route::get('/admin/dashboard/users', function(){
    return view('admin_dashboard/users');
})->name('admin_dashboard/users');
Route::get('/admin/dashboard/add_user', function(){
    return view('admin_dashboard/addUser');
})->name('addUser');
Route::get('/admin/dashboard/editUser', function(){
    return view('admin_dashboard/editUser');
})->name('editUser');
Route::get('/admin/dashboard/transactions',function(){
    return view('admin_dashboard.transactions');
})->name('transactions');



/*logout route*/
 Route::get('logout', [UserController::class, 'logout'])->name('logout');



Route::get('getData', [CustomerController::class, 'getData'])->name('getData');



});