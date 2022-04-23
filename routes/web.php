<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('website/index');
});
Route::get('/yemenpay', function () {
    return view('website/index');
}) -> name('index');

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

