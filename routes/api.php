<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\API\APIPaymentController;
use App\Http\Controllers\api\test\checkoutController;
use App\Http\Controllers\user\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Production routes
 */
Route::group([
    'prefix' => 'v1',
    
], function () {
        Route::get('/merchant/allPayments' , [APIPaymentController::class,'allPayments']);

        Route::post('/merchant/payment_order', [checkoutController::class, 'payment_order'])->name('payment_order');

    Route::get('/merchant/cancel_payment_order/{invoice_referance}',[checkoutController::class,'cancel_payment'])->name('cancel_payment');
    Route::get('acounts',[checkoutController::class,'get_acounts']);
 
      
});
Route::group([
    'prefix'=>'v1',
    'middleware'=>['web']],function(){
    Route::get('/merchant/do_payment_order/{invoice_referance}',[checkoutController::class,'do_payment'])->name('do_payment');
Route::post('Payment_confirmation',[checkoutController::class,'Financial_processing'])->name('Payment_confirmation');
Route::get('/cancel/payment/{cancel}',[checkoutController::class,'cancelPay'])->name('cancelPay');
});





// ----------------------------- testApi routes ------------------------------//
Route::group([
    'prefix' => 'test',
    
], function () {
   
    Route::post('/merchant/payment_order', [checkoutController::class, 'payment_order'])->name('payment_order');
   
    Route::get('/merchant/cancel_payment_order/{invoice_referance}',[checkoutController::class,'cancel_payment'])->name('cancel_payment');
    Route::get('acounts',[checkoutController::class,'get_acounts']);
    Route::get('/getinvoice/{id}',[checkoutController::class,'getinvoice'])->name('getinvoice');
    Route::get('/userWithTransaction/{id}',[checkoutController::class,'userWithTransaction'])->name('userWithTransaction');
    Route::get('/finanical_accounts',[checkoutController::class,'finanical_accounts'])->name('finanical_accounts');
    Route::get('/account_statement/{id}',[checkoutController::class,'customer_account_statement'])->name('customer_account_statement');
    Route::get('/Ledger_account/{id}',[checkoutController::class,'Ledger_account'])->name('Ledger_account');
    Route::get('/Ledger_accounts/{id}',[checkoutController::class,'Ledger_accounts'])->name('Ledger_accounts');
});

Route::group([
    'prefix'=>'test',
    'middleware'=>['web']],function(){
    Route::get('/merchant/do_payment_order/{invoice_referance}',[checkoutController::class,'do_payment'])->name('do_payment');
Route::post('Payment_confirmation',[checkoutController::class,'Financial_processing'])->name('Payment_confirmation');

});
// Route::group([
//     'middleware' => 'api',
// ], function () {
//     Route::group(['prefix' => 'admin','namespace'=>'Admin'],function(){
//         Route::post('/login', [AdminController::class, 'login']);

//     });
//     Route::group(['prefix' => 'user'],function(){
//         Route::post('/login', [UserController::class, 'login']);

//     });
    
//     Route::post('/register', [AdminController::class, 'register']);
//     Route::post('/logout', [AdminController::class, 'logout']);
//     Route::post('/refresh', [AdminController::class, 'refresh']);
//     Route::get('/user-profile', [AdminController::class, 'userProfile']);    
// });


// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'user',
    
// ], function () {
//     Route::post('/login', [UserController::class, 'login']);
//     Route::post('/register', [UserController::class, 'register']);
//     Route::post('/logout', [UserController::class, 'logout']);
//     Route::post('/refresh', [UserController::class, 'refresh']);
//     Route::get('/user-profile', [UserController::class, 'userProfile']);    
// });


// Route::group([
//     'middleware' => 'api',
//   //  'prefix' => 'payments',
    
// ], function () {


//     Route::get('/allPayments' , [APIPaymentController::class,'allPayments']);
// });


