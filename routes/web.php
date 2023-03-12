<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/1', function () {
//     return view('dashboard');
// });
// Route::get('/2', function () {
//     return view('admin.barang.index');
// });
// Route::get('/3', function () {
//     return view('admin.barang.view');
// });
// Route::get('/4', function () {
//     return view('admin.barang.create');
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/barang', BarangController::class);
