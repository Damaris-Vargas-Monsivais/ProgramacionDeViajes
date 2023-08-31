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
Route::get('/registro-viaje', function () {
    return view('viajes.registro-viaje');
});
Route::get('/registro-tracto', function () {
    return view('reseteo.registro-tracto');
});
Route::get('/registro-remolque', function () {
    return view('reseteo.registro-remolque');
});
Route::get('/datos-venta', function () {
    return view('venta.datos-venta');
});

/*
Route::get('/', function () {
    // return view('panel-control');
    return view('inicio.login'); //Al iniciar el servidor, dirigir al login.
});*/
