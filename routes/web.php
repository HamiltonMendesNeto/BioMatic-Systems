<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/sobreNos', [UserController::class, 'sobreNos'])->name('user.sobreNos');
Route::get('/galeria', [UserController::class, 'galeria'])->name('user.galeria');
Route::get('/menu', [UserController::class, 'menu'])->name('user.menu');
Route::get('/integrantes', [UserController::class, 'integrantes'])->name('user.integrantes');
Route::post('/menu', [UserController::class, 'store'])->name('user.store');
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/controle', [UserController::class, 'controle'])->name('user.controle');

Route::get('/editar-user/{user}', [UserController::class, 'editar'])->name('user.editar');
Route::put('/atualizar-user/{user}', [UserController::class, 'atualizar'])->name('user.atualizar');