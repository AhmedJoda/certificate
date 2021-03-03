<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BanksController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingsController;

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

Route::middleware('auth')->group(function(){
    // admin routes
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('/settings', SettingsController::class);
    Route::resource('/bills', BillsController::class);
    Route::resource('/banks', BanksController::class);
    Route::resource('/services', ServicesController::class);
    // end admin routes
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



