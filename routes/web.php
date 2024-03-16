<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//hiện thị dashboard

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');


//thiết lập Route để show account admin

Route::get('/admin/user/list',[AdminController::class,'showAdmin']);


// thiết lập route để thêm dánh sách Users

Route::get('/admin/user/add',[AdminUserController::class,'addUsers']);


///thiết lập route add data vào database

Route::post('/admin/user/store',[AdminUserController::class,'store']);



///gom nhóm lại để fix bug đăng nhập

Route::middleware('auth')->group(function(){

    //thiết lập Route để show account admin

Route::get('/admin/user/list',[AdminUserController::class,'showAdmin']);


// thiết lập route để thêm dánh sách Users

Route::get('/admin/user/add',[AdminUserController::class,'addUsers']);


///thiết lập route add data vào database

Route::post('/admin/user/store',[AdminUserController::class,'store']);
});


///thiết lập route để xóa dữ liệu

Route::get('/admin/user/delete/{id}',[AdminUserController::class,'delete'])->name('delete_user');