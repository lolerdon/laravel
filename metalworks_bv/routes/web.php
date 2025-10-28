<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor;

Route::get('/', [Vendor::class, 'index']);
Route::post('/', [Vendor::class, 'store']);
Route::get('edit/{id}', [Vendor::class, 'show']);
Route::post('edit/{id}', [Vendor::class, 'update']);
Route::get('delete/{id}', [Vendor::class, 'destroy']);
