<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
