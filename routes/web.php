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

