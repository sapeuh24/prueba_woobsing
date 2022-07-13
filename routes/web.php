<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;
use App\Http\Middleware\SetCookieSession;
use App\Http\Middleware\EmailVerify;
use App\Http\Middleware\LastSessionVerify;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware([SetCookieSession::class , EmailVerify::class, LastSessionVerify::class]);


Auth::routes();

Route::get('encontrar_error', [DevController::class, 'encontrarError'])->name('encontrar_error')->middleware([EmailVerify::class]);

Route::get('email_verify', [DevController::class, 'emailVerify'])->name('email_verify');

Route::get('sesion_verify/{user}', [DevController::class, 'sessionVerify'])->name('session_verify');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('2fa', [App\Http\Controllers\UserCodeController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\UserCodeController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\UserCodeController::class, 'resend'])->name('2fa.resend');