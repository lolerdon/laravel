<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor;

Route::get('/', [Vendor::class, 'index']);
Route::post('/', [Vendor::class, 'store']);
