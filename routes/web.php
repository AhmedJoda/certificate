<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GoldenCertificateController;
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

Route::middleware('auth')->group(function () {
    // admin routes
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('/settings', SettingsController::class);
    Route::resource('/certificates', CertificateController::class);
    Route::resource('/golden-certificates', GoldenCertificateController::class);
    // end admin routes
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
