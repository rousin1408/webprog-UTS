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

Route::get('/', [\App\Http\Controllers\BooksController::class, 'index']);
Route::get('/book/{id}', [\App\Http\Controllers\BooksController::class, 'detail']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact']);
Route::get('/publisher', [\App\Http\Controllers\PublisherController::class, 'publisher']);
Route::get('/category/{id}', [\App\Http\Controllers\CategoriesController::class, 'category']);
