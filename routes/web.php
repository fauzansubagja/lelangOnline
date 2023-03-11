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
    return view('welcome');
});
Route::get('/1', function () {
    return view('dashboard');
});
Route::get('/2', function () {
    return view('admin.barang.index');
});
Route::get('/3', function () {
    return view('admin.barang.view');
});
