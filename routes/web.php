<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::post('/login', [App\Http\Controllers\Auth\AuthXmlController::class, 'authXml'])->name('login.xml');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::view('/', 'pages.home')->name('home');

    Route::get('/conditions', [App\Http\Controllers\AppController::class, 'conditions'])->name('conditions');
    Route::get('/terms', [App\Http\Controllers\AppController::class, 'terms'])->name('terms');
    Route::get('/noticias', [App\Http\Controllers\AppController::class, 'news'])->name('news');
    Route::get('/faqs', [App\Http\Controllers\AppController::class, 'faqs'])->name('faqs');
    Route::get('/contacto', [App\Http\Controllers\AppController::class, 'contact'])->name('contact');
    Route::get('/farmaconsulting-responde', [App\Http\Controllers\AppController::class, 'consulting'])->name('consulting');
    Route::get('/farmaconsulting', [App\Http\Controllers\AppController::class, 'farmaconsulting'])->name('farmaconsulting');

    // subpages of contact
    Route::view('/cuentanos-tu-consulta', 'pages.mail')->name('contact.mail');
    Route::view('/nosostros-te-llamamos', 'pages.callback')->name('contact.callback');
    Route::view('/concertamos-reunion-en-nuestras-oficinas', 'pages.shops')->name('contact.shops');

    Route::post('/update/account', [App\Http\Controllers\Api\MyAccountController::class, 'updateAccount'])->name('update-account');
    Route::post('/update/preferences', [App\Http\Controllers\Api\MyAccountController::class, 'updatePreferences'])->name('update-preferences');

    Route::post('/contact/consultation', [App\Http\Controllers\Api\ContactController::class, 'consultation'])->name('contact-consultation');
    Route::post('/contact/general', [App\Http\Controllers\Api\ContactController::class, 'general'])->name('contact-general');
});
