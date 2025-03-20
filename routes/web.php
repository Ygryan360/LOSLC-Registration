<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'index'])->name('home');
Route::get('/inscription', [RegistrationController::class, 'create'])->name('registration');
Route::post('/inscription', [RegistrationController::class, 'store'])->name('registration.store');
