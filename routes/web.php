<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('customer_form');
});

Route::get('/add-customer', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/add-customer', [CustomerController::class, 'store'])->name('customer.store');
