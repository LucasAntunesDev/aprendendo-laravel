<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('categorias')->group(function () {
    Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('categorias');
    Route::get('novo', 'App\Http\Controllers\CategoryController@create')->name('categorianovo');
    Route::get('{id}', 'App\Http\Controllers\CategoryController@edit')->name('categoriaform');
    Route::post('/', 'App\Http\Controllers\CategoryController@store')->name('categoriainsert');
    Route::put('{id}', 'App\Http\Controllers\CategoryController@update')->name('categoriaupdate');
    Route::delete('{id}', 'App\Http\Controllers\CategoryController@destroy')->name('categoriadelete');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', 'App\Http\Controllers\ProductController@index')->name('produtos');
    Route::get('novo', 'App\Http\Controllers\ProductController@create')->name('produtonovo');
    Route::get('{id}', 'App\Http\Controllers\ProductController@edit')->name('produtoform');
    Route::post('/', 'App\Http\Controllers\ProductController@store')->name('produtoinsert');
    Route::put('{id}', 'App\Http\Controllers\ProductController@update')->name('produtoupdate');
    Route::delete('{id}', 'App\Http\Controllers\ProductController@destroy')->name('produtodelete');
});
