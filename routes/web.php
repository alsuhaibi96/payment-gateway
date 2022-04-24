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
});


Route::get('/login', function () {
    return view('website/login');
}) -> name('login');

Route::get('/docs', function () {
    return view('website/docs');
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
