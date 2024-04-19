<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PasswordGeneratorController;

Route::get("/password", [
    PasswordGeneratorController::class,
    "GenerateRandomPass",
]);
