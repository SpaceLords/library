<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

Route::controller(AuthorController::class)->group(function () {
    Route::get('/author', 'show');
    Route::any('/author/add', 'addOrEdit');
    Route::any('/author/edit/{id}', 'addOrEdit');
    Route::get('/author/delete/{id}', 'delete');
});

Route::controller(BookController::class)->group(function () {
    Route::any('/', 'show');
    Route::any('/book/add', 'addOrEdit');
    Route::any('/book/edit/{id}', 'addOrEdit');
    Route::any('/book/delete/{id}', 'delete');
});
