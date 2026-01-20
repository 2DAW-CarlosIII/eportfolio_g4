<?php

use App\Http\Controllers\API\EvidenciasController as APIEvidenciasController;
use App\Http\Controllers\API\TareasController;
use App\Http\Controllers\EvidenciasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PSpell\Config;
use Psr\Http\Message\ServerRequestInterface;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::apiResource('tareas', TareasController::class)
        ->parameters([
            'tareas' => 'tarea'
        ]);

    Route::apiResource('tareas.evidencias', APIEvidenciasController::class)
        ->parameters([
            'tareas' => 'tarea',
            'evidencias' => 'evidencia'
        ]);

    Route::apiResource(
        'criterios-evaluacion.tareas',
        App\Http\Controllers\API\TareasController::class
    )->parameters([
        'criterios-evaluacion' => 'criterioEvaluacion',
        'tareas' => 'tarea'
    ]);
});


