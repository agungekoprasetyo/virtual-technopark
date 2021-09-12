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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', 'BeritaController@index')->name('berita');
Route::get('/kontak', 'BeritaController@kontak')->name('kontak');
Route::get('/galeri', 'BeritaController@galeri')->name('galeri');
Route::get('/event', 'BeritaController@event')->name('event');
Route::get('/aplikasi', 'BeritaController@aplikasi')->name('aplikasi');


Route::prefix('adminpanel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/technopark', [App\Http\Controllers\Admin\DashboardController::class, 'technopark']);
    Route::get('/startup', [App\Http\Controllers\Admin\DashboardController::class, 'startup']);
    Route::get('/komunitas', [App\Http\Controllers\Admin\DashboardController::class, 'komunitas']);



});
