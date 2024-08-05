<?php

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

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [UserController::class, 'showDashboard'])->name('dashboard');
    Route::get('user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update', [UserController::class, 'update'])->name('user.update');
    Route::get('user/change-password', [UserController::class, 'showChangePasswordForm'])->name('user.change-password');
    Route::post('user/change-password', [UserController::class, 'changePassword'])->name('user.change-password.post');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/users', [AdminController::class, 'index'])->name('admin.users');
    Route::post('admin/users/{id}/toggle-active', [AdminController::class, 'toggleActive'])->name('admin.users.toggle-active');
});
Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
