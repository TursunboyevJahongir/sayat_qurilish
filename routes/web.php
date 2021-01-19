<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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

Route::get('dash/admin/login',[LoginController::class,'index'])->name('login');
Route::post('dash/admin/login',[LoginController::class,'index'])->name('login');

Route::middleware('auth:web')->prefix('admin')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
