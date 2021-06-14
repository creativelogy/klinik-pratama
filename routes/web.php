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

Route::get('/', 'App\Http\Controllers\PagesController@homeTest');
Route::get('/pasien', 'App\Http\Controllers\PasienController@index');
Route::get('/perawat', 'App\Http\Controllers\PerawatController@index');
Route::get('/homeTest', 'App\Http\Controllers\PagesController@homeTest');
Route::get('/product', 'App\Http\Controllers\ProductController@homeTest');
Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
