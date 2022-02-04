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
Route::get('/login/recuperar', [App\Http\Controllers\Auth\AuthXmlController::class, 'resetPassword'])->name('reset-password.index');
Route::post('/login/recuperar', [App\Http\Controllers\Auth\AuthXmlController::class, 'resetPasswordPost'])->name('reset-password.post');

Route::view('/terminos-y-condiciones', 'pages.terms')->name('terms');
Route::view('/politica-privacidad', 'pages.politica-privacidad')->name('politica-privacidad');

Route::middleware('auth')->group(function () {
    Route::view('/', 'pages.qrv2')->name('home');
    Route::view('/qrv2', 'pages.qrv2')->name('qr2');
    Route::view('/qrv2', 'pages.qrv2')->name('qrv2');
    Route::view('/qrv3', 'pages.home')->name('qrv3');

    // Route::get('/terms', [App\Http\Controllers\AppController::class, 'terms'])->name('terms');
    Route::get('/conditions', [App\Http\Controllers\AppController::class, 'conditions'])->name('conditions');
    Route::get('/noticias', [App\Http\Controllers\AppController::class, 'news'])->name('news');
    Route::get('/faqs', [App\Http\Controllers\AppController::class, 'faqs'])->name('faqs');
    Route::get('/contacto', [App\Http\Controllers\AppController::class, 'contact'])->name('contact');
    Route::get('/farmaconsulting-responde', [App\Http\Controllers\AppController::class, 'consulting'])->name('consulting');
    Route::get('/farmaconsulting', [App\Http\Controllers\AppController::class, 'farmaconsulting'])->name('farmaconsulting');
    Route::get('/valoracion-y-sugerencias', [App\Http\Controllers\AppController::class, 'valoracion'])->name('valoracion');
    Route::post('/valoracion-y-sugerencias', [App\Http\Controllers\AppController::class, 'valoracionPost'])->name('valoracion.post');

    Route::get('/code/{landing}', [App\Http\Controllers\AppController::class, 'landing'])->name('landing');
    Route::get('/code/{landing}/event', [App\Http\Controllers\AppController::class, 'landingEvent'])->name('landing.event');

    // subpages of contact
    Route::view('/cuentanos-tu-consulta', 'pages.mail')->name('contact.mail');
    Route::view('/nosotros-te-llamamos', 'pages.callback')->name('contact.callback');
    Route::view('/concertamos-reunion-en-nuestras-oficinas', 'pages.shops')->name('contact.shops');

    Route::get('/cita-en-oficina/{oficina}', [App\Http\Controllers\Api\ContactController::class, 'appointment_create'])->name('contact.appointment');

    Route::post('/update/account', [App\Http\Controllers\Api\MyAccountController::class, 'updateAccount'])->name('update-account');
    Route::post('/update/preferences', [App\Http\Controllers\Api\MyAccountController::class, 'updatePreferences'])->name('update-preferences');
    Route::post('/update/password', [App\Http\Controllers\Api\MyAccountController::class, 'updateClave'])->name('update-password');
    Route::post('/register/event', [App\Http\Controllers\Api\QrController::class, 'register'])->name('register-event');
    // Route::post('/update/password', [App\Http\Controllers\Api\ContactController::class, 'getNewPassword'])->name('update-password');

    Route::post('/contact/consultation', [App\Http\Controllers\Api\ContactController::class, 'consultation'])->name('contact-consultation');
    Route::post('/contact/general', [App\Http\Controllers\Api\ContactController::class, 'general'])->name('contact-general');
    Route::post('/contact/appointment', [App\Http\Controllers\Api\ContactController::class, 'appointment'])->name('contact-appointment');

});

/* landing pages routes*/
Route::middleware('landing.install')->group(function () {
    Route::view('instalacion-chrome', 'pages.landings.instalacion-chrome')->name('landingChrome');
    Route::view('instalacion-safari', 'pages.landings.instalacion-safari')->name('landingSafari');
});
