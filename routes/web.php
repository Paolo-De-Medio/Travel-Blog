<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PubblicController;

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

Route::get('/', [PubblicController::class, 'home'])->name('welcome');
Route::get('/contacts', [PubblicController::class, 'contactForm'])->name('contacts');
Route::post('/contacts/submit', [PubblicController::class, 'submit'])->name('contacts.submit');
Route::get('/trip/index', [TripController::class, 'index'])->name('trip.index');
Route::get('/trip/create', [TripController::class, 'create'])->name('trip.create');
Route::post('/trip/store', [TripController::class, 'store'])->name('trip.store');
Route::get('/trip/create/detail/{trip}', [TripController::class, 'show'])->name('trip.detail');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/create/detail/{article}', [ArticleController::class, 'show'])->name('article.detail');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/trip/edit/{trip}', [TripController::class, 'edit'])->name('trip.edit');
Route::put('/trip/update/{trip}', [TripController::class, 'update'])->name('trip.update');
Route::delete('/trip/delete/{trip}', [TripController::class, 'destroy'])->name('trip.destroy');

Route::get('/article/auth/{auth}', [ArticleController::class, 'auth'])->name('article.auth');
Route::get('/trip/auth/{auth}', [TripController::class, 'auth'])->name('trip.auth');


