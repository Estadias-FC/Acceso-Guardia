<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\ObservacionesController;
use App\Http\Controllers\EntrcomController;
use App\Http\Controllers\ExternoController;
use App\Http\Controllers\ConsultaController;
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

Route::get('acceso', [AccesoController::class, 'index'])->middleware('auth');
Route::post('check_entry', [AccesoController::class, 'check_entry']);
Route::post('refresh_table_registro', [AccesoController::class, 'refresh_table_registro']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/entrada', function () {
    return view('entrada');
});
Route::get('entrada', [EntradaController::class,'create']);*/


Route::resource('entrada', EntradaController::class)->middleware('auth');
Route::resource('salida', SalidaController::class)->middleware('auth');
Route::resource('observaciones', ObservacionesController::class)->middleware('auth');
Route::resource('entrcom', EntrcomController::class)->middleware('auth');
Route::resource('externo', ExternoController::class)->middleware('auth');
Route::resource('consulta', ConsultaController::class)->middleware('auth');