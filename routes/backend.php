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

Route::get('/', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
Route::resource('fahrzeugdaten', \App\Http\Controllers\Backend\FahrzeugdatensController::class);
Route::resource('laufleistung', \App\Http\Controllers\Backend\LaufleistungController::class)->only('store', 'destroy');
Route::resource('intern/hersteller', \App\Http\Controllers\Backend\Admin\HerstellersController::class, ['names' => 'intern.hersteller']);
Route::resource('intern/modell', \App\Http\Controllers\Backend\Admin\ModellsController::class, ['names' => 'intern.modell']);
Route::resource('intern/fahrzeuge', \App\Http\Controllers\Backend\Admin\FahrzeugesController::class, ['names' => 'intern.fahrzeuge']);
Route::resource('kunden', \App\Http\Controllers\Backend\KundensController::class);
Route::resource('angebote', \App\Http\Controllers\Backend\AngebotesController::class);

Route::controller(\App\Http\Controllers\ExportController::class)->group(function () {
    Route::get('fahrzeugdaten/export/fahrzeugdaten', 'exportFahrzeugCSVFile')->name('fahrzeugdaten.export-fahrzeug-csvfile');
    Route::get('kunden/export/kunden', 'exportKundenCSVFile')->name('kunden.export-kunden-csvfile');
    Route::get('angebote/export/angebote', 'exportAngeboteCSVFile')->name('angebote.export-angebote-csvfile');
});

// PWA
Route::get('/offline', [\App\Http\Controllers\LaravelPWA::class, 'offline']);

