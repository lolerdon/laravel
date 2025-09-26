<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get("/", [PageController::class, "index"])->name("home");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/contact", [PageController::class, "contact"])->name("contact");
Route::get("/our_team", [PageController::class, "our_team"])->name("our_team");
