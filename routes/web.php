<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
Route::resource('/pegawaiBengkel', \App\Http\Controllers\PegawaiController::class);
