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

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/account', [App\Http\Controllers\AppController::class, 'account'])->name('account');

    Route::get('/conditions', [App\Http\Controllers\AppController::class, 'conditions'])->name('conditions');
    Route::get('/terms', [App\Http\Controllers\AppController::class, 'terms'])->name('terms');
    Route::get('/news', [App\Http\Controllers\AppController::class, 'news'])->name('news');
    Route::get('/faqs', [App\Http\Controllers\AppController::class, 'faqs'])->name('faqs');
    Route::get('/contact', [App\Http\Controllers\AppController::class, 'contact'])->name('contact');
    Route::get('/consulting', [App\Http\Controllers\AppController::class, 'consulting'])->name('consulting');
    Route::get('/farmaconsulting', [App\Http\Controllers\AppController::class, 'farmaconsulting'])->name('farmaconsulting');
});
