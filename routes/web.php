<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_post'])->name('login.post');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::put('profile/email', [ProfileController::class, 'email_update'])->name('profile.email');
    Route::put('profile/password', [ProfileController::class, 'password_update'])->name('profile.password');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::get('settings',[SettingController::class,'index'])->name('setting');
    Route::put('settings',[SettingController::class,'update'])->name('setting.update');
});