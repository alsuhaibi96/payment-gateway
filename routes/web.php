<?php

use App\Http\Controllers\AdminDashController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContuctMe;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\API\test\checkoutController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\merchants\MerchantController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\CustomerDashController;


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

Route::get('/user/login',[UserController::class,'viewLogin'])->name('login')->middleware('backToDashboard');

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
 Route::get('/send/link',[UserController::class,'sendLinkEmail'])->name('send_email');
 Route::post('/send/link', [UserController::class, 'sendEmailAgain'])->name('reset_email_again');


Route::get('/about-us', function () {
    return view('website/about');
})->name('about');
// contuct form send email
Route::get('/contact',[ContuctController::class,'contuct'])->name('contact-us');
Route::post('/contact', [ContuctController::class,'contuctUs'])->name('send_contact_message');


// new docs
Route::get('/docs/home', function() {
return view('new-docs.index');
})->name('docs/home'); 
Route::get('/new-docs/card', function() {
return view('new-docs.card');
})->name('docs/card'); 
Route::get('/new-docs/checkout', function() {
return view('new-docs.checkout');
})->name('docs/checkout'); 
Route::get('/new-docs/tutorial', function() {
    return view('new-docs.tutorial');
    })->name('docs/tutorial'); 

Route::get('/document', function () {
    return view('docs/docs');
})->name('docs');
Route::get('/checkout', function () {
    return view('docs/checkout');
})->name('checkout');

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
Route::post('money/transfer',[CustomerController::class,'transferMoney'])->name('transfer_money_post');


Route::get('/moblie-conf', function (){
    return view('website/customer/moblie_conf');
});
Route::get('/adderss', function (){
    return view('website/customer/name_adderss');
});

Route::get('/buisness-info', function (){
    return view('website/merchant/buisness_info');
});

Route::group(['middleware'=>'role:Customer'],function()
{

    Route::get('/customer/dashboard', function(){
        return view('customer_dashboard/home');
    })->name('home');
    
    Route::get('/customer/dashboard', [UserProfileController::class,'Profile']
    )->name('customer_dashboard');

    /*profile edit */

    Route::post('/customer_dashboard/deposit', [UserProfileController::class,'addProfile']
    )->name('addProfile');
    Route::post('/customer_dashboard/edit', [UserProfileController::class,'editProfile']
    )->name('editProfile');
    
   
    
/*********** Customer Dashboard Routes *************/
/*********** Customer Dashboard Routes *************/
//add balance show
Route::get('/customer_dashboard/add_balance', [CustomerDashController::class,'addBalance']
)->name('addBalance');

//transaction show
Route::get('/customer_dashboard/transaction', [CustomerDashController::class,'transaction']
)->name('transaction');

/*   funds transfer */
Route::get('/customer/dashboard/transfer', [CustomerDashController::class,'transfer']
)->name('transfer_money');

/*FAQ page route*/
Route::get('/customer_dashboard/report', [CustomerDashController::class,'report']
)->name('report');

/*
profile settings
*/
Route::get('/customer_dashboard/settings', [CustomerDashController::class,'settings']
)->name('settings');
/**************edit image***************/
Route::post('/customer_dashboard/editImage', [UserProfileController::class,'editImage'])->name('editImage');
Route::get('customer/transfer/details', [CustomerController::class,'transferredMoneyDetails'])->name('tansfer_details');
Route::get('customer/transfer/detail', [CustomerController::class,'showTransferCustomerMoney'])->name('customer_tansfer_details');


Route::get('/bank/acccount', [CustomerController::class,'bank_account'])->name('view_bank_account');
Route::post('/update/account', [CustomerController::class,'update_account'])->name('update_customer_account');

Route::get('/inoice/all', [CustomerController::class,'listInvoices'])->name('list_invoices');

}
);

/***************change password****************/
Route::get('/change-password', [App\Http\Controllers\user\ChangePasswordController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\user\ChangePasswordController::class, 'updatePassword'])->name('update-password');




 /********** Merchant Dashboard Routes *************/





    Route::group(['middleware' => 'DisableBackBtn'], function () {
        Route::get('merchant/transfer/transactions', [MerchantController::class,'showTransferMerchantDetails'])->name('merchant_show_transfer');
        Route::get('/merchant_dashboard', [MerchantController::class, 'index'])->name('merchant_dashboard');
        Route::get('/Transactions', [MerchantController::class, 'Transactions'])->name('Transactions');
        Route::get('/listInvoice', [MerchantController::class, 'listInvoice'])->name('listInvoice');
        Route::get('/financial_movement', [MerchantController::class, 'financial_movement'])->name('financial_movement');
        Route::post('/filter_financial_movement', [MerchantController::class, 'filter_financial_movement'])->name('filter_financial_movement');
        Route::get('/bank_account', [MerchantController::class, 'bank_account'])->name('bank_account');
        Route::post('/update_acount', [MerchantController::class, 'update_acount'])->name('update_acount');
        Route::get('/key_genrator', [MerchantController::class, 'key_genrator'])->name('key_genrator');
        Route::post('/key_generat', [MerchantController::class, 'key_generat'])->name('key_generat');
        Route::get('/transferMony', [MerchantController::class, 'transferMony'])->name('transferMony');
        //This route is calling the method transfering money
        Route::post('transfer', [MerchantController::class, 'transfer'])->name('transfer');
    });



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

Route::get('/admin/dashboard/users',[AdminDashController::class,'show_user'] )->name('admin_dashboard/users');
Route::get('/admin/dashboard/add_user',[AdminDashController::class,'addUser'])->name('addUser');
Route::post('/admin/save_user',[AdminDashController::class,'save'])->name('save_user');
Route::get('/admin/dashboard/editUser',[AdminDashController::class,'edit'])->name('editUser');
Route::post('/Admin/update_user/{user_id}',[AdminDashController::class,'update'])->name('update_user');
Route::get('/admin/dashboard/transactions',[AdminDashController::class,'Transactions'])->name('transactions');
Route::get('/admin/dashboard/settings',function(){
    return view('admin_dashboard.settings');
})->name('admin/settings');
Route::get('/admin/dashboard/settings', [AdminDashController::class,'Profile']
)->name('admin/settings');
Route::post('/admin/dashboard/editProfile', [AdminDashController::class,'editProfile'])->name('editProfil');
 /*profile edit */

//  Route::post('/admin/dashboard/settings', [AdminDashController::class,'addProfile']
//  )->name('addProfile');
 Route::post('/admin/dashboard/edit', [AdminDashController::class,'editAccount']
 )->name('editAccount');


/*logout route*/
 Route::get('logout', [UserController::class, 'logout'])->name('logout');



Route::get('getData', [CustomerController::class, 'getData'])->name('getData');
Route::get('profile', [UserProfileController::class, 'profile'])->name('profile');



});