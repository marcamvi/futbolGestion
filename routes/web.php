<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntidadController;
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

Route::get('/', HomeController::class);

Route::controller(EntidadController::class)->group(function (){
  Route::get('{entidad}','indexEquipo');
Route::get('{entidad}/nuevo-equipo','createEquipo');
Route::get('{entidad}/{equipo}','showEquipo');
Route::get('{entidad}/{equipo}/nuevo-partido', 'createPartido');
Route::get('{entidad}/{equipo}/{partido}/nuevo-resultado', 'createResultado');  
});

