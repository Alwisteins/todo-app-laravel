<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
