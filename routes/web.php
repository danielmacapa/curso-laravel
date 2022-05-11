<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');

//Rota Padrão do Laravel
Route::get('/', function () { return view('welcome'); });
