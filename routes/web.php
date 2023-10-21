<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', function () {
    return view('index');
});
Route::get('/registro-cliente', function () {
    return view('viajes.registro-cliente');
});
Route::get('/registro-operador', function () {
    return view('viajes.registro-operador');
});
/*VIAJES*/ 
Route::get('/registro-viaje', function () {
    return view('viajes.registro-viaje');
});
Route::get('/categoria-viajes', function () {
    return view('viajes.categoria-viajes');
});
Route::get('/clasificacion-viajes', function () {
    return view('viajes.clasificacion-viajes');
});
Route::get('/viajes-pendientes', function () {
    return view('viajes.viajes-pendientes');
});
Route::get('/viajes-terminados', function () {
    return view('viajes.viajes-terminados');
});
/*VENTA DE VIAJES*/
Route::get('/datos-venta', function () {
    return view('venta.datos-venta');
});
Route::get('/categoria-venta', function () {
    return view('venta.categoria-venta');
});
Route::get('/ventas-pendientes', function () {
    return view('venta.ventas-pendientes');
});
Route::get('/ventas-terminadas', function () {
    return view('venta.ventas-terminadas');
});
/**RESETEOS */
Route::get('/registro-reseteo', function () {
    return view('reseteo.registro-reseteo');
});
Route::get('/registro-tracto', function () {
    return view('reseteo.registro-tracto');
});
Route::get('/registro-remolque', function () {
    return view('reseteo.registro-remolque');
});
Route::get('/categoria-reseteo', function () {
    return view('reseteo.categoria-reseteo');
});
Route::get('/reseteos-pendientes', function () {
    return view('reseteo.reseteos-pendientes');
});
Route::get('/reseteos-terminados', function () {
    return view('reseteo.reseteos-terminados');
});
/**PERFIL */
Route::get('/editar-perfil', function () {
    return view('perfil.editar-perfil');
});
Route::get('/administrador', function () {
    return view('perfil.administrador');
});


Route::get('/prueba', function () {
    return view('reseteo.prueba');
});
/*
Route::get('/', function () {
    // return view('panel-control');
    return view('inicio.login'); //Al iniciar el servidor, dirigir al login.
});*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
