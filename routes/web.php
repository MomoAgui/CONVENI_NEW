<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
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

//非ログ画面
Route::get('/',[AuthController::class,'index']);
Route::post('/login',[AuthController::class,'login']);

//会員登録画面
Route::get('/user/register',[UserController::class,'index']);
Route::post('/user/register',[UserController::class,'register']);

//ログイン後のtopページ
Route::get('/top',[TopController::class,'top']);
Route::get('/sevenice',[TopController::class,'ice']);
Route::get('/sevenbread',[TopController::class,'bread']);
Route::get('/sevenall',[TopController::class,'all']);
Route::get('/famimaice',[TopController::class,'famiice']);
Route::get('/famimabread',[TopController::class,'famibread']);
Route::get('/famimaall',[TopController::class,'famiall']);
