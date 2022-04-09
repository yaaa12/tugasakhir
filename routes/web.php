<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\bibitController;
use App\Http\Controllers\pelangganController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/bibit', 'App\Http\Controllers\bibitController');
Route::resource('/pelanggan', 'App\Http\Controllers\pelangganController');
Route::resource('/suratjln', 'App\Http\Controllers\suratjlnController');

Route::get('/search', [bibitController::class, 'search'])->name('search');
Route::get('/search', [pelangganController::class, 'search'])->name('search');
Route::get('/search', [suratjlnController::class, 'search'])->name('search');

