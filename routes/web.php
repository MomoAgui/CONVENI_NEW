<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageController;



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
Route::get('/',[AuthController::class,'index'])->name('front.index');
Route::post('/login',[AuthController::class,'login']);

//会員登録画面
Route::get('/user/register',[UserController::class,'index']);
Route::post('/user/register',[UserController::class,'register']);

//ログイン後のtopページ
Route::middleware(['auth'])->group(function () {
Route::get('/top',[TopController::class,'top']);
//セブン表示各３
Route::get('/sevenice',[TaskController::class,'ice']);
Route::get('/sevenetc',[TaskController::class,'sevenetc']);
Route::get('/sevenall',[TaskController::class,'all']);
//ファミマ表示各３
Route::get('/famimaice',[TaskController::class,'famiice']);
Route::get('/famimaetc',[TaskController::class,'famimaetc']);
Route::get('/famimaall',[TaskController::class,'famiall']);
//ローソン表示各３
Route::get('/lawsonice',[TaskController::class,'lawsonice']);
Route::get('/lawsonetc',[TaskController::class,'lawsonetc']);
Route::get('/lawsonall',[TaskController::class,'lawsonall']);
//ログイン後のユーザーiconクリックページ
Route::get('/user/index',[TopController::class,'index']);
//登録機能
        Route::get('/task/create', [TaskController::class, 'create']);
        Route::post('/task/register',[ImageController::class,'upload'] );
        Route::post('/task/register',[TaskController::class,'register']);  //登録送信
        Route::get('/detail/{task_id}', [TopController::class, 'detail'])->whereNumber('task_id')->name('detail');
        Route::get('/task/edit/{task_id}', [TopController::class, 'edit'])->whereNumber('task_id')->name('edit');
        Route::put('/task/edit/{task_id}', [TopController::class, 'editSave'])->whereNumber('task_id')->name('edit_save');
        Route::delete('/task/delete/{task_id}', [TaskController::class, 'delete'])->whereNumber('task_id')->name('delete');


//ログアウト
Route::get('/logout', [AuthController::class, 'logout']);
});