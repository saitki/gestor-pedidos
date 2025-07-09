<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
