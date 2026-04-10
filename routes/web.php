<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/session/store', [ProductController::class, 'storeSession']);
Route::get('/session/get', [ProductController::class, 'getSession']);
Route::get('/session/delete', [ProductController::class, 'deleteSession']);

Route::get('/register', fn() => view('auth.register'));
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/dashboard', fn() => view('dashboard'))->middleware('auth');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);

    Route::get('/session/store', [ProductController::class, 'storeSession']);
    Route::get('/session/get', [ProductController::class, 'getSession']);
    Route::get('/session/delete', [ProductController::class, 'deleteSession']);
});