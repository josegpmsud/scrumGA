<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\TipoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AlumnoController::class)->group(function(){
    Route::get('/alumnos','index');
    Route::get('/alumno/{id}', 'show');
    Route::post('/alumno', 'store');
    Route::put('/alumno/{id}', 'update');
    Route::delete('/alumno/{id}', 'destroy');
});
Route::controller(TipoController::class)->group(function(){
    Route::get('/tipos','index');
    Route::get('/tipo/{id}', 'show');
    Route::post('/tipo', 'store');
    Route::put('/tipo/{id}', 'update');
    Route::delete('/tipo/{id}', 'destroy');
});
Route::controller(EvaluacionController::class)->group(function(){
    Route::get('/evaluaciones','index');
    Route::get('/evaluacion/{id}', 'show');
    Route::post('/evaluacion', 'store');
    Route::put('/evaluacion/{id}', 'update');
    Route::delete('/evaluacion/{id}', 'destroy');
});
Route::controller(CalificacionController::class)->group(function(){
    Route::get('/calificaciones','index');
    Route::get('/calificacion/{id}', 'show');
    Route::post('/calificacion', 'store');
    Route::put('/calificacion/{id}', 'update');
    Route::delete('/calificacion/{id}', 'destroy');
});