<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datacontroller;

Route::get('/', [Datacontroller::class, 'index']);
