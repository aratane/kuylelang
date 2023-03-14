<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
use App\Models\Petugas;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title']);
})->name('home');

// MASYARAKAT
Route::group(['middleware' => 'isTamu'], function () {
    // Register
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'register_action'])->name('register.action');
    // Login
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'login_action'])->name('login.action');
});

Route::group(['middleware' => 'isLogin'], function () {
    // Password
    Route::get('password', [UserController::class, 'password'])->name('password');
    Route::post('password', [UserController::class, 'password_action'])->name('password.action');
    // Logout
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    // Pengaturan
    Route::get('pengaturan', [UserController::class, 'pengaturan'])->name('pengaturan');
    Route::post('pengaturan', [UserController::class, 'pengaturan_action'])->name('pengaturan.action');
    // Dashboard User
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

// END MASYARAKAT

// ADMINISTRATOR
Route::group(['middleware' => 'isTamu'], function () {
    // Akses Admin
    Route::get('admin', [PetugasController::class, 'index'])->name('admin');
    // Register
    Route::get('adminregister', [PetugasController::class, 'adminregister'])->name('adminregister');
    Route::post('adminregister', [PetugasController::class, 'adminregister_action'])->name('adminregister.action');
    // Login
    Route::get('adminlogin', [PetugasController::class, 'adminlogin'])->name('adminlogin');
    Route::post('adminlogin', [PetugasController::class, 'adminlogin_action'])->name('adminlogin.action');
});

Route::group(['middleware' => 'isLogin'], function () {
    // Password
    Route::get('password', [PetugasController::class, 'password'])->name('password');
    Route::post('password', [PetugasController::class, 'password_action'])->name('password.action');
    // Logout
    Route::get('logout', [PetugasController::class, 'logout'])->name('logout');
    // Pengaturan
    Route::get('pengaturan', [PetugasController::class, 'pengaturan'])->name('pengaturan');
    Route::post('pengaturan', [PetugasController::class, 'pengaturan_action'])->name('pengaturan.action');
    // Dashboard User
    Route::get('dashboard', [PetugasController::class, 'dashboard'])->name('dashboard');
});
