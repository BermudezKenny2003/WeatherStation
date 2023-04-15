<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\HomeController;
 

Route::get('',[HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('/users', [UserController::class, 'index']);
Route::get('/servicios', [ServiciosController::class, 'index']);


Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');


Route::resource('users','App\Http\Controllers\UserController')->only(['index', 'edit', 'update'])->names('users');
Route::resource('users',UserController::class)->names('admin.users');
Route::resource('users/edit',UserController::class)->names('admin.users.edit');
Route::resource('users/create',UserController::class)->names('admin.users.create');