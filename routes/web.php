<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login');
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
//     Route::get('/logout', [LoginController::class,'logout'])->name('logout');
// });

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', [LoginController::class,'index'])->name('login');
//     Route::post('/login', [LoginController::class,'login'])->name('login');
// });