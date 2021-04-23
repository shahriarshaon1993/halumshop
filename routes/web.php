<?php

use App\Http\Controllers\Backend\Auth\AdminLoginController;
use App\Http\Controllers\Backend\Auth\AdminLogoutController;
use App\Http\Controllers\Backend\Auth\AdminProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'proccessLogin']);
    Route::post('/logout', [AdminLogoutController::class, 'proccessLogout'])->name('admin.logout');

    Route::get('/change/password', [AdminProfileController::class, 'index'])->name('change.password');
    Route::post('/change/password', [AdminProfileController::class, 'changePassword']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Categories
    Route::resource('categories', CategoryController::class);
});

Route::get('/login', [AdminLoginController::class, 'index'])->name('login');

Route::get('/', function () {
    return view('frontend.home');
});

Route::fallback(function () {
    return '404 NOT FOUND';
});
