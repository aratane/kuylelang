<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Models\Lelang;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title']);
})->name('home');
Route::get('/', [BarangController::class, 'home'])->name('home');

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
        Route::get('admindashboard', [AdminController::class, 'index'])->name('admindashboard');
        // List User
        Route::get('userlist', [UserController::class, 'list'])->name('userlist');
        // Lelang status
        Route::post('lelangstatus', [LelangController::class, 'status'])->name('lelangstatus');
        // Ganti Password
        Route::get('adminpassword', [AdminController::class, 'password'])->name('adminpassword');
        Route::post('adminpassword', [AdminController::class, 'password_action'])->name('adminpassword.action');
        // Pengaturan
        Route::get('adminpengaturan', [AdminController::class, 'pengaturan'])->name('adminpengaturan');
        Route::post('adminpengaturan', [AdminController::class, 'pengaturan_action'])->name('adminpengaturan.action');
    });
});
// END ADMIN

// MENU
Route::group(['middleware' => 'isLogin'], function () {
    // Menu Barang
    Route::resource('/barang', \App\Http\Controllers\BarangController::class);
    Route::get('pengajuanbarang', [BarangController::class, 'pengajuan'])->name('pengajuanbarang');
    // Menu Lelang
    Route::resource('/lelang', \App\Http\Controllers\LelangController::class);
    Route::resource('/petugas', \App\Http\Controllers\PetugasController::class);
    Route::resource('/user', \App\Http\Controllers\UserController::class);
    Route::resource('/pengajuan', \App\Http\Controllers\PengajuanController::class);
    Route::resource('/penawaran', \App\Http\Controllers\PenawaranController::class);
});
// END MENU