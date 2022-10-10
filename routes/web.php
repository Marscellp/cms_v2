<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->group(function () {
    Route::match(['get', 'post'], '/login', [AdminLoginController::class, 'login'])->name('adminlogin');
    Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admindashboard');
});