<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('home', ['title']);
})->name('home');

// AUTH
Route::group(['middleware' => 'isTamu'], function () {
    // Register
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'processRegister'])->name('register.action');
    // Login
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'processLogin'])->name('login.action');
});
// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('isLogin');


// MASYARAKAT
Route::group(['middleware' => 'isLogin'], function () {
    Route::group(['middleware' => 'auth:user'], function () {
        // Dashboard User
        Route::get('userdashboard', [UserController::class, 'index'])->name('userdashboard');
        // Ganti Password
        Route::get('userpassword', [UserController::class, 'password'])->name('userpassword');
        Route::post('userpassword', [UserController::class, 'password_action'])->name('userpassword.action');
        // Pengaturan
        Route::get('userpengaturan', [UserController::class, 'pengaturan'])->name('userpengaturan');
        Route::post('userpengaturan', [UserController::class, 'pengaturan_action'])->name('userpengaturan.action');
        
    });
});
// END MASYARAKAT

// ADMINISTRATOR
Route::group(['middleware' => 'isLogin'], function () {
    Route::group(['middleware' => 'auth:admin'], function () {
        // Dashboard Admin
        Route::get('admindashboard', [PetugasController::class, 'index'])->name('admindashboard');
        // Ganti Password
        Route::get('password', [PetugasController::class, 'password'])->name('password');
        Route::post('password', [PetugasController::class, 'password_action'])->name('password.action');
        // Pengaturan
        Route::get('pengaturan', [PetugasController::class, 'pengaturan'])->name('pengaturan');
        Route::post('pengaturan', [PetugasController::class, 'pengaturan_action'])->name('pengaturan.action');
        
    });
});
// END ADMIN

// PETUGAS
Route::group(['middleware' => 'isLogin'], function () {
    Route::group(['middleware' => 'auth:petugas'], function () {
        // Dashboard Petugas
        Route::get('petugasdashboard', [AdminController::class, 'index'])->name('petugasdashboard');
        // Ganti Password
        Route::get('password', [AdminController::class, 'password'])->name('password');
        Route::post('password', [AdminController::class, 'password_action'])->name('password.action');
        // Pengaturan
        Route::get('pengaturan', [AdminController::class, 'pengaturan'])->name('pengaturan');
        Route::post('pengaturan', [AdminController::class, 'pengaturan_action'])->name('pengaturan.action');
        
    });
});
// END PETUGAS