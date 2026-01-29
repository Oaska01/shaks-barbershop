<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::middleware('guest')->group(function()
    {
        Route::get('/registration-view', [AuthController::class, 'registrationView'])->name('registration.view');
        Route::post('/registeration', [AuthController::class, 'registration'])->name('registration');

        Route::get('/login-view', [AuthController::class, 'loginView'])->name('login.view');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
    }
);

Route::middleware('auth') ->group(function()
{
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin
Route::middleware('auth', 'role:admin') ->group(function()
{
    Route::get('/admin-home', [AdminController::class, 'adminHome']) -> name('admin.home');
    Route::get('/admin-products', [AdminController::class, 'adminHome']) -> name('admin.products');
    Route::get('/admin-users', [AdminController::class, 'users']) -> name('admin.users');
    Route::post('/admin/user/{user}/delete', [AdminController::class, 'deleteUser']) -> name('admin.delete');
});
// User

Route::middleware('auth','role:user') -> group(function()
    {
        Route::get('/user-home', [UserController::class, 'userHome'])->name('user.home');
    }

);
