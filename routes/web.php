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
Route::get('/choferes', 'DriverController@index')->name('choferes');
Route::get('/choferes/activos', 'DriverController@activos')->name('activos');
Route::get('/choferes/inactivos', 'DriverController@inactivos')->name('inactivos');
Route::get('/choferes/encarrera', 'DriverController@encarrera')->name('encarrera');

Route::get('/choferes/{chofer}/activar', 'DriverController@activar')->name('activar');
Route::get('/choferes/{chofer}/inactivar', 'DriverController@inactivar')->name('inactivar');

Route::get('/choferes/{chofer}/auto', 'VehicleController@create')->name('agregarAuto');
Route::post('/auto/agregar/{chofer}', 'VehicleController@store')->name('agregarAutoAccion');

Route::get('/choferes/nuevo', 'DriverController@create')->name('crearChofer');
Route::post('/choferes', 'DriverController@store')->name('crearChoferAccion');

Route::get('/choferes/modificar/{chofer}', 'DriverController@edit')->name('modificarChofer');
Route::put('/choferes/modificar/{chofer}', 'DriverController@update')->name('modificarChoferAccion');

Route::get('/choferes/multas/{chofer}', 'InfractionController@index')->name('multas');
Route::get('/choferes/multa/{chofer}', 'InfractionController@create')->name('crearMulta');
Route::post('/choferes/multa/{chofer}', 'InfractionController@store')->name('crearMultaAccion');

Route::get('/carrera', function () {
    return view('carrera');
})->name('carrera');

/*********************************MOVIL ROUTES************************************/
Route::get('/bienvenido','DriverMovilController@index')->name('choferesMovil');
Route::get('/bienvenido/nuevaCarrera/{driver_id}','DriverMovilController@newCarreer')->name('nuevaCarrera');
Route::get('/bienvenido/finalizarCarrera/{order_id}','DriverMovilController@finishCarreer')->name('finalizarCarrera');
Route::get('/bienvenido/verificarCarrera/{driver_id}','DriverMovilController@verifyCarreer')->name('verificarCarrera');
/*********************************************************************************/
