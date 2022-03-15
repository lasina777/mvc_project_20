<?php

use Controllers\MainController;
use Controllers\UserController;

Route::get('/', [MainController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginpost']);

Route::get('/category', [UserController::class, 'category']);
Route::post('/category', [UserController::class, 'categorypost']);

Route::get('/Post', [UserController::class, 'post']);
Route::post('/Post', [UserController::class, 'Postpost']);
