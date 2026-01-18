<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::middleware('guest')->group(function()
    {
        Route::get('/registration-view', [AuthController::class, 'registrationView'])->name('registration.view');
        Route::post('/registeration', [AuthController::class, 'registration'])->name('registration');

        Route::get('/login-view', [AuthController::class, 'loginView'])->name('login.view');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
    }
);
