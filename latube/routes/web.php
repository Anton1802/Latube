<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_process', [LoginController::class, 'login'])->name('login_process');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register_process', [RegisterController::class, 'register'])->name('register_process');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/add', [DownloadController::class, 'add'])->name('add')->middleware('auth');
Route::post('/add_process', [DownloadController::class, 'add'])->name('add_process')->middleware('auth');

Route::get('/video/{id}', [VideoController::class, 'show']);

Route::get('/user', [UserController::class, 'show'])->name('user')->middleware('auth');
