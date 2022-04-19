<?php

use App\Http\Controllers\Admin\AdminController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' =>'api','prefix' => 'admin'],function(){
//     Route::get('/login', function () {
//         return view('website/login');
//     });
//     Route::get('/register', function () {
//         return view('website/register');
//     });
//     Route::get('/home', function () {
//         return view('website/register');
//     });
// });
// Route::group(['prefix' => 'admin'],function ()
// {
//     Route::get('/register', function () {
//         return view('website/register');
//     });	
//     Route::post('/getadmin',[AdminController::class,'index']);	
//     Route::get('/login', function () {
//         return view('website/login');
//     });
// });

// Route::group(['prefix' => 'merchant','middleware' => ['auth.guard:merchants','jwt.auth']],function ()
// {
//     Route::get('/register', function () {
//         return view('website/register');
//     });	
// 	Route::get('/login', function () {
//         return view('website/login');
//     });	
// });

// Route::group(['prefix' => 'user','middleware' => ['auth.guard:users','jwt.auth']],function ()
// {
// 	Route::get('/register', function () {
//         return view('website/register');
//     });	
// 	Route::get('/login', function () {
//         return view('website/login');
//     });		
// });
// Route::group(['prefix' => 'admin','middleware' => ['auth:admins','jwt.auth']],function ()
// {
// 	Route::post('/register', function () {
//         Route::post('/register', [UserController::class, 'register']);
//     });	
// 	Route::post('/login', [UserController::class, 'login']);	
// });
Route::group([
    'middleware' => 'api',
], function () {
    Route::group(['prefix' => 'admin','namespace'=>'Admin'],function(){
        Route::post('/login', [AdminController::class, 'login']);

    });
    Route::group(['prefix' => 'user'],function(){
        Route::post('/login', [UserController::class, 'login']);

    });
    
    Route::post('/register', [AdminController::class, 'register']);
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::post('/refresh', [AdminController::class, 'refresh']);
    Route::get('/user-profile', [AdminController::class, 'userProfile']);    
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'user',
    
], function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/refresh', [UserController::class, 'refresh']);
    Route::get('/user-profile', [UserController::class, 'userProfile']);    
});
