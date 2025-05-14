<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "index"])->name("home");

Route::get("/ex", [PageController::class, "ex"]);
