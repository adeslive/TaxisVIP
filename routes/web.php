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

Route::get('/activos', function () {
    return view('activos');
})->name('activos');


Route::get('/choferes', 'DriverController@index')->name('choferes');
Route::post('/choferes', 'DriverController@store');

Route::get('/choferes/activos', function(){ return view('choferes.activos'); });

Route::get('/choferes/nuevo', 'DriverController@create')->name('crearChofer');

Route::get('/choferes/modificar/{chofer}', 'InfractionController@create')->name('multa');
Route::put('/choferes/{chofer}', 'InfractionController@create')->name('multa');

Route::get('/choferes/multa/{chofer}', 'InfractionController@create')->name('multa');
Route::post('/choferes/multa/{chofer}', 'InfractionController@store')->name('crearMulta');


