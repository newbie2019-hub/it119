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

Route::apiResource('patrons', PatronController::class);
Route::apiResource('books', BookController::class);

Route::resource('/borrowedbook', BorrowedBookController::class);
Route::resource('/returnedbook', ReturnedBookController::class);

Route::get('/categories', [CategoryController::class, 'index']);