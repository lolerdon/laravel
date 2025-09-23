<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/', [InvoiceController::class, 'index']);

Route::get('/order/{id}', [InvoiceController::class, 'show'])->name('order.show');
