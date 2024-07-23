<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pengguna', \App\Http\Controllers\UserController::class);

Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
  Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPost'])->name('register');
  Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
  Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('login');
});

Auth::routes();

Route::middleware('auth', 'user-access:admin')->name('admin.')->group(function () {
  Route::resource('/admin/pengguna', \App\Http\Controllers\UserController::class);
  Route::resource('/admin/barang', \App\Http\Controllers\BarangController::class);
  Route::resource('/admin/customer', \App\Http\Controllers\CustomerController::class);
  Route::resource('/admin/keluhan', \App\Http\Controllers\KeluhanController::class);
  Route::resource('/admin/kendaraan', \App\Http\Controllers\KendaraanController::class);
  Route::resource('/admin/pegawai', \App\Http\Controllers\PegawaiController::class);
  Route::resource('/admin/supplier', \App\Http\Controllers\SupplierController::class);
  Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin');
  Route::delete('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

Route::middleware('auth', 'user-access:customer')->name('customer.')->group(function () {
  Route::resource('/customer/keluhan', \App\Http\Controllers\KeluhanController::class);
  Route::get('/customer/home', [\App\Http\Controllers\HomeController::class, 'customerHome'])->name('customer.home');
  Route::delete('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
Route::resource('/pegawaiBengkel', \App\Http\Controllers\PegawaiController::class);

