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

Route::group(['prefix' => 'panel', 'middleware' => ['auth','access.level:admin|secretaria']], function () {

    // Choferes, activos, inactivos y en carrera
    Route::get('/choferes', 'DriverController@index')->name('choferes');
    Route::get('/choferes/activos', 'DriverController@activos')->name('activos');
    Route::get('/choferes/inactivos', 'DriverController@inactivos')->name('inactivos');
    Route::get('/choferes/encarrera', 'DriverController@encarrera')->name('encarrera');

    // Activacion de chofer
    Route::get('/choferes/{chofer}/activar', 'DriverController@activar')->name('activar');
    Route::get('/choferes/{chofer}/inactivar', 'DriverController@inactivar')->name('inactivar');

    // Metodos para agregar autos
    Route::get('/choferes/{chofer}/auto', 'VehicleController@create')->name('agregarAuto');
    Route::post('/auto/agregar/{chofer}', 'VehicleController@store')->name('agregarAutoAccion');

    // Metodos para crear chofer
    Route::get('/choferes/nuevo', 'DriverController@create')->name('crearChofer');
    Route::post('/choferes', 'DriverController@store')->name('crearChoferAccion');

    // Modificacion del chofer
    Route::get('/choferes/modificar/{chofer}', 'DriverController@edit')->name('modificarChofer');
    Route::put('/choferes/modificar/{chofer}', 'DriverController@update')->name('modificarChoferAccion');

    // Metodos para crear multas
    Route::get('/choferes/multas/{chofer}', 'InfractionController@index')->name('multas');
    Route::get('/choferes/multa/{chofer}', 'InfractionController@create')->name('crearMulta');
    Route::post('/choferes/multa/{chofer}', 'InfractionController@store')->name('crearMultaAccion');

    // Metodos para la carrera
    Route::get('/carrera', 'OrderController@create')->name('carrera');
});

//ZONAS RUTAS DE PRUEBA

Route::get('/zonas/agregarZona', function () {
    return view('/zonas/agregarZona');
})->name('agregarZona');

Route::get('/zonas/listaZonas', function () {
    return view('/zonas/listaZonas');
})->name('listaZonas');

Route::get('/zonas/zona', function () {
    return view('/zonas/zona');
})->name('zona');


/*********************************MOVIL ROUTES************************************/
Route::get('/bienvenido','DriverMovilController@index')->name('choferesMovil');
Route::get('/bienvenido/nuevaCarrera/{driver_id}','DriverMovilController@newCarreer')->name('nuevaCarrera');
Route::get('/bienvenido/finalizarCarrera/{order_id}','DriverMovilController@finishCarreer')->name('finalizarCarrera');
Route::get('/bienvenido/verificarCarrera/{driver_id}','DriverMovilController@verifyCarreer')->name('verificarCarrera');
/*********************************************************************************/
