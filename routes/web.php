<?php

use App\Http\Controllers\PanelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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

Route::POST('/register', [RegisterController::class, 'register'])->name('register');

Route::GET('/adminpanel', [PanelController::class, 'getListTeam'])->name('getListTeam');
Route::POST('/adminpanel', [PanelController::class, 'getDetailTeam'])->name('getDetailTeam');
Route::PUT('/adminpanel', [PanelController::class, 'updateTeam'])->name('updateTeam');
Route::DELETE('/adminpanel', [PanelController::class, 'deleteTeam'])->name('deleteTeam');
Route::post('/send-mail', [MailController::class, 'sendMail' ])-> name('sendMail');
