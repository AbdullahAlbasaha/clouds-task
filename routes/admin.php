<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;

Route::group(["middleware"=> "auth:admin"], function () {
    Route::get("/", function(){
          return redirect()->route("customers.index");
    });
    Route::post('customers-activation/{customer}', [CustomerController::class,'activation'])->name('customers.activation');
    
    Route::resource('customers', CustomerController::class);
    Route::post('logout', [LogoutController::class,'logout'])->name('admin.logout');

 });
Route::get('login', [LoginController::class,'loginForm'])->name('admin.login');
Route::post('login', [LoginController::class,'login']);
