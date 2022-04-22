<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SquareController;
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

Route::get('/', [ SquareController::class, 'index'])->name('app');

Route::get('/square/{square:id}', [SquareController::class, 'show']);
Route::get('/author/{author:id}', [AuthorController::class, 'show']);
Route::get('/book/{book:id}', [BookController::class, 'show']);
