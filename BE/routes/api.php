<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PatronController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReturnedBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('patrons', PatronController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
Route::resource('books', BookController::class)->only(['index', 'store', 'show', 'update', 'destroy']);

Route::get('/borrowedbook', [BorrowedBookController::class, 'index']);
Route::get('/borrowedbook/{id}', [BorrowedBookController::class, 'show']);
Route::post('/borrowedbook', [BorrowedBookController::class, 'store']);

Route::post('/returnedbook', [ReturnedBookController::class, 'store']);
Route::get('/returnedbook/{id}', [ReturnedBookController::class, 'show']);
Route::get('/returnedbook', [ReturnedBookController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);