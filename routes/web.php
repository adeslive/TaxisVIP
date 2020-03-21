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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('activos', function () {
    return view('activos');
})->name('activos');

Route::get('encarrera', function () {
    return view('encarrera');
})->name('encarrera');

Route::get('inactivos', function () {
    return view('inactivos');
})->name('inactivos');

Route::get('choferes', function () {
    return view('choferes');
})->name('choferes');

Route::get('agregarChofer', function () {
    return view('agregarChofer');
})->name('agregarChofer');

Route::get('agregarAuto', function () {
    return view('agregarAuto');
})->name('agregarAuto');

Route::get('multa', function () {
    return view('multa');
})->name('multa');

