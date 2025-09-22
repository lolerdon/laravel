<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/', [InvoiceController::class, 'index']);

Route::get('/order', function () {
    return view('order')
        ->with('order', request('order'));
});
