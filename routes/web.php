<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('pages.home');
Route::resource('posts', 'PostController');

Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('users.login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'doLogin'])->name('users.do_login');
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('users.register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'doRegister'])->name('users.do_register');
