<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title']);
})->name('home');

// Register
Route::get('register', [UserController::class, 'register'])->name('register')->middleware('isTamu');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

// Login
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('isTamu');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

// Password
Route::get('password', [UserController::class, 'password'])->name('password')->middleware('isLogin');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');

// Pengaturan
Route::get('pengaturan', [UserController::class, 'pengaturan'])->name('pengaturan')->middleware('isLogin');
Route::post('pengaturan', [UserController::class, 'pengaturan_action'])->name('pengaturan.action');

// Logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Dashboard User
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('isLogin');

// Barang
Route::get('barang', [BarangController::class, 'barang'])->name('barang');
