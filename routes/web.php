<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    //return view('dashboard');
    return view('welcome');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');
Route::resource('damages','App\Http\Controllers\DamageController')->names('damages');
Route::resource('datos','App\Http\Controllers\DatoController')->names('datos');
Route::resource('prediccions','App\Http\Controllers\PrediccionController')->names('prediccions');
Route::resource('users','App\Http\Controllers\UserController')->only(['index', 'edit', 'update'])->names('users');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
