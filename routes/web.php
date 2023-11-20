<?php

use App\Http\Controllers\Frontend\PlanSubscribeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PlanController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\LogoutController;
use App\Http\Controllers\Frontend\Auth\RegisterController;

Route::get('plans',[PlanController::class,'index'])->name('plans');
Route::post('choose-plan',[PlanController::class,'choose_plan'])->name('choose-plan');
Route::post('plan-subscribe',[PlanSubscribeController::class,'subscribe'])->name('plan-subscribe');
Route::get('login',[LoginController::class,'loginForm'])->name('login');
Route::post('login',[LoginController::class,'login']);

Route::get('register',[RegisterController::class,'registerForm'])->name('register');
Route::post('register',[RegisterController::class,'register']);

Route::get('/', function (Request $request) {
    return view('frontend.welcome');
})->name('home')->middleware('auth:customer');

Route::post('logout',[LogoutController::class,'logout'])->name('logout')->middleware('auth:customer');
