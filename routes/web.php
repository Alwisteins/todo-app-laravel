<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todo.index')->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('auth.handleLogin')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create')->middleware('auth');
Route::post('/todo/create', [TodoController::class, 'handleCreate'])->name('todo.handleCreate')->middleware('auth');
Route::delete('/todo/delete/{id}', [TodoController::class, 'handleDelete'])->name('todo.handleDelete')->middleware('auth');
Route::get('/todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit')->middleware('auth');
Route::put('/todo/update/{id}', [TodoController::class, 'handleEdit'])->name('todo.handleEdit')->middleware('auth');
Route::get('/todo/detail/{id}', [TodoController::class, 'detail'])->name('todo.detail')->middleware('auth');