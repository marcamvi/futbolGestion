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

Route::get('/', [HomeController::class, '__invoke'])->name ('home');


Route::controller(EntidadController::class)->group(function ($entidad){
Route::get('{entidad}','indexEntidad')->name('entidades.indexEntidad');    
Route::get('{entidad}','indexEquipo')->name('entidades.indexEquipo');
Route::get('{entidad}/partidos','indexPartido')->name('entidades.indexPartido');

Route::post('{entidad}/nuevoEquipo', 'createEquipo')->name('entidades.createEquipo');
Route::get('{entidad}/{equipo}/editEquipo', 'editEquipo')->name('entidades.editEquipo');
Route::put('{entidad}/{equipo}/update', 'updateEquipo')->name('entidades.updateEquipo');
Route::delete('{entidad}/{equipo}/delete', 'deleteEquipo')->name('entidades.deleteEquipo');

Route::post('{entidad}/nuevo-partido', 'createPartido')->name('entidades.createPartido');
Route::get('{entidad}/{partido}/editPartido', 'editPartido')->name('entidades.editPartido');
Route::put('{entidad}/{partido}/updatePartido', 'updatePartido')->name('entidades.updatePartido');
Route::delete('{entidad}/{partido}/deletePartido', 'deletePartido')->name('entidades.deletePartido');

Route::get('{entidad}/indexresultado', 'indexResultado')->name('entidades.indexResultado');
Route::post('{entidad}/nuevo-resultado', 'createResultado')->name('entidades.createResultado');
Route::get('{entidad}/{resultado}/editResultado', 'editResultado')->name('entidades.editResultado');
Route::put('{entidad}/{resultado}/updateResultado', 'updateResultado')->name('entidades.updateResultado');
Route::delete('{entidad}/{resultado}/deleteResultado', 'deleteResultado')->name('entidades.deleteResultado');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
