<?php

use App\Http\Controllers\PanelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// FE
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('registerPage');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/dashboard', function () {
    return view('dashboardPage');
});

Route::get('/admin', function () {
    return view('adminPanel');
});

// BE
Route::POST('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::GET('/adminpanel', [PanelController::class, 'getListTeam'])->name('getListTeam');
Route::POST('/adminpanel', [PanelController::class, 'getDetailTeam'])->name('getDetailTeam');
Route::PUT('/adminpanel', [PanelController::class, 'updateTeam'])->name('updateTeam');
Route::DELETE('/adminpanel', [PanelController::class, 'deleteTeam'])->name('deleteTeam');

Route::post('/send-mail', [MailController::class, 'sendMail' ])-> name('sendMail');
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
//     Route::get('/logout', [LoginController::class,'logout'])->name('logout');
// });

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', [LoginController::class,'index'])->name('login');
//     Route::post('/login', [LoginController::class,'login'])->name('login');
// });
