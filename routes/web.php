<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// views
Route::get('/', HomeController::class)
    ->name('home');
