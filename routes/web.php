<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('live.index');
Route::get('/',[DashboardController::class, 'sign_in'])->name('live.authentication.sign');
Route::get('/forgot-password',[DashboardController::class, 'forgot_password'])->name('live.authentication.forgot_password');
Route::get('/sign-up',[DashboardController::class, 'sign_up'])->name('live.authentication.signup');

Route::get('/terms-of-service',[DashboardController::class, 'terms_of_service'])->name('live.legal.terms-of-service');





