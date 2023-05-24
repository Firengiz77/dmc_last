<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;


Route::prefix('admin')->name('admin.')->group(function () {
    // admin user routes

    Route::get('/index',[AdminController::class,'index'])->middleware('admin')->name('index');
    Route::get('/login',function(){ return view('admin.user.login');})->name('login');
    Route::get('/register',function(){return view('admin.user.register'); })->middleware('admin')->name('register');
    Route::get('/account',[AdminController::class,'account'])->middleware('admin')->name('account');
    Route::get('/all_admin',[AdminController::class,'all_admin'])->middleware('admin')->name('all_admin');
    Route::post('/admin-register',[AuthController::class,'register'])->middleware('admin')->name('admin-register');
    Route::post('/admin-login',[AuthController::class,'login'])->name('admin-login');
    Route::get('/admin-logout',[AuthController::class,'logout'])->name('logout');
    Route::post('/admin-image',[AuthController::class,'update_image'])->name('update_image');
    Route::post('/admin-update',[AuthController::class,'admin_update'])->name('update');
    Route::get('/admin-delete/{id}',[AuthController::class,'admin_delete'])->name('delete');
    Route::post('/admin-password',[AuthController::class,'admin_password'])->name('admin_password');


});


