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
Route::get('{entidad}', [EntidadController::class, 'indexEquipo']);
Route::get('{entidad}/nuevo-equipo', [EntidadController::class, 'createEquipo']);
Route::get('{entidad}/{equipo}', [EntidadController::class, 'showEquipo']);
Route::get('{entidad}/{equipo}/nuevo-partido', [EntidadController::class, 'createPartido']);

Route::get('{entidad}/{equipo}/{partido}/nuevo-resultado', [EntidadController::class, 'createResultado'] );
