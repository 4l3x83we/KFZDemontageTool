<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
//Route::get('/', [\App\Http\Controllers\indexController::class, 'index'])->name('index');
Route::get('/account', [\App\Http\Controllers\indexController::class, 'account'])->name('frontend.account');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/suche/{fahrzeugdaten}/modell', [\App\Http\Controllers\SearchController::class, 'getModell']);

// PWA
Route::get('/offline', [\App\Http\Controllers\LaravelPWA::class, 'offline']);


