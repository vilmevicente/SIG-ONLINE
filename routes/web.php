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
    return view('core');
});
Route::get('/logística', function () {
    return view('logística.index');
});
Route::get('/logística/encomendas', function () {
    return view('logística.product');
});
Route::get('/logística/stock', function () {
    return view('logística.stock');
});
Route::get('/logística/entregas', function () {
    return view('logística.entregas');
});
