<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;

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

Route::get('/', HomeController::class);

Route::controller(ComicController::class) -> group(function() {
    Route::get('comics', 'index')->name('comics.index');
    Route::get('comics/create', 'create')->name('comics.create');
    Route::get('comics/{id}', 'show')->name('comics.show');
    Route::post('comics','store')->name('comics.store');
    Route::get('comics/{id}/edit','edit')->name('comics.edit');
    Route::put('comics/{comic}','update')->name('comics.update');
    Route::delete('comics/{comic}','destroy')->name('comics.destroy');
});