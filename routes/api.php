<?php
use App\Http\Controllers\API\CicloFormativoController;
use App\Http\Controllers\API\FamiliaProfesionalController;
use App\Http\Controllers\API\ModuloFormativoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


//Rutas /appi/v1

Route::prefix('v1')->group(function () {

    Route::apiResource('familias-profesionales', FamiliaProfesionalController::class)
        ->parameters(['familias-profesionales' => 'familiaProfesional']);

    Route::apiResource('ciclos-formativos', CicloFormativoController::class)
        ->parameters([
            'familias-profesionales' => 'familia',
            'ciclos-formativos' => 'cicloFormativo'
        ]);

    Route::apiResource('modulos-formativos', ModuloFormativoController::class)
        ->parameters([
            'modulos-formativos' => 'moduloFormativo'
        ]);
});
