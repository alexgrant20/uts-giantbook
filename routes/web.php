<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::prefix('/publisher')->controller(PublisherController::class)->name('publisher.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{publisher}', 'show')->name('show');
});

Route::post('/subscribe', [GeneralController::class, 'subscribe'])->name('subscribe');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');