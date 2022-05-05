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
    return view('Bienvenid@ a la aplicación de gestión de tus equipos de fútbol y partidos.');
});
Route::get('entidad', function () {
    return "Bienvenid@ a la página de entidades. Selecciona tu entidad";
});
Route::get('entidad/{entidad}', function($entidad) {
    return "Bienvenid@ $entidad"; 
});

Route::get('entidad/{entidad}/equipo', function ($entidad) {
    return "Bienvenid@ a la página de equipos";
});
Route::get('entidad/{entidad}/equipo/nuevo-equipo', function ($entidad) {
    return "Bienvenid@ a la creación de equipos";
});
Route::get('entidad/{entidad}/{equipo}', function($entidad,$equipo){
    return "Bienvenid@ al equipo $equipo";
});
Route::get('entidad/{entidad}/{equipo}/nuevo-partido', function($entidad,$equipo) {
    return "Bienvenid@ a la creación de partidos.";
});
Route::get('entidad/{entidad}/{equipo}/{partido}/{resultado?}', function($entidad,$equipo, $partido, $resultado=null) {
    return "Bienvenid@ al resultado del $partido";
});
/*Route::get('entidad/{entidad}/{equipo}/{partido}', function($entidad,$equipo, $partido) {
    return "Bienvenid@ al partido $partido";
});*/
Route::get('entidad/{entidad}/{equipo}/{partido}/nuevo-resultado', function($entidad,$equipo, $partido) {
    return "Bienvenid@ a la creación de resultados";
});
