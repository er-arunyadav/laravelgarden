<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('services', [ServiceController::class, 'index'])->name('services');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('traits', [ServiceController::class, 'traits'])->name('traits');
Route::get('solid-design-principles', [ServiceController::class, 'solid'])->name('solid');
Route::view('pay', 'topics.gateway')->name('pay');
Route::post('pay/store', [PayOrderController::class, 'store'])->name('pay.store');
