<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/sobreNos', [UserController::class, 'sobreNos'])->name('user.sobreNos');
Route::get('/galeria', [UserController::class, 'galeria'])->name('user.galeria');