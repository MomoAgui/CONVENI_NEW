<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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
Route::get('/form',[TopController::class,'form']);
Route::post('/form',[TopController::class,'form']);
//セブン表示
Route::get('/sevenice',[TaskController::class,'ice']);

//ファミマ
Route::get('/famimaice',[TaskController::class,'famiice']);

//ローソン表示
Route::get('/lawsonice',[TaskController::class,'lawsonice']);


//ログイン後のユーザーiconクリックページ
Route::get('/user/index',[TopController::class,'index']);

//登録機能
        Route::get('/task/create', [TaskController::class, 'create']);
        Route::post('/task/register',[TaskController::class,'register']);  //登録送信
        Route::get('/task/edit/{task_id}', [TopController::class, 'edit'])->whereNumber('task_id')->name('edit');
        Route::put('/task/edit/{task_id}', [TopController::class, 'editSave'])->whereNumber('task_id')->name('edit_save');
        Route::delete('/task/delete/{task_id}', [TopController::class, 'delete'])->whereNumber('task_id')->name('delete');




//ログアウト
Route::get('/logout', [AuthController::class, 'logout']);
});

// 管理画面
Route::prefix('/admin')->group(function () {
    Route::get('', [AdminAuthController::class, 'index'])->name('admin.index');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/top', [AdminHomeController::class, 'top'])->name('admin.top');
        Route::get('/user/list', [AdminUserController::class, 'list'])->name('admin.user.list');
    });
    Route::get('/logout', [AdminAuthController::class, 'logout']);
});
