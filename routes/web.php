<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'index'])->name('home');
Route::post('/inscription', [RegistrationController::class, 'store'])->name('registration.store');
