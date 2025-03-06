<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/user', [UserController::class, 'create'])->name('user.create');

Route::get('/sobreNos', [UserController::class, 'sobreNos'])->name('user.sobreNos');
