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
Route::get('/ref_bhp', 'App\Http\Controllers\ref_bhpController@index');
Route::get('/ref_obat', 'App\Http\Controllers\ref_obatController@index');
Route::get('/reservasi', 'App\Http\Controllers\reservasiController@index');

Route::resource('reservasi', 'App\Http\Controllers\reservasiController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
Route::middleware('role:pasien|super-admin')->get('/user/pasien', function() {
    return redirect(url('/'));
})->name('user/pasien');
Route::middleware('role:admin|super-admin')->get('/user/admin', function() {
    return view('user.admin.index');
})->name('user/admin');
Route::middleware('role:admin-poli|super-admin')->get('/user/adminpoli', function() {
    return view('user.admin_poli.index');
})->name('user/adminpoli');
Route::middleware('role:kasir|super-admin')->get('/user/kasir', function() {
    return view('user.kasir.index');
})->name('user/kasir');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
