<?php

use App\Http\Controllers\API\CriterioEvaluacionController;
use App\Http\Controllers\API\MatriculaController;
use App\Http\Controllers\API\ResultadoAprendizajeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {

    Route::apiResource('resultados_aprendizaje', ResultadoAprendizajeController::class)->parameters([
        'resultados_aprendizaje' => 'resultadoAprendizaje'
    ]);

    Route::apiResource('criterios_evaluacion', CriterioEvaluacionController::class)->parameters([
        'criterios_evaluacion' => 'criterioEvaluacion'
    ]);

    Route::apiResource('matriculas', MatriculaController::class)->parameters([
        'matriculas' => 'matricula'
    ]);

});


Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'address' => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
        'basePath' => '/api',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);

    try {
        $records = json_decode($response->getBody()->getContents())->records;
        $response = response()->json($records, 200, $headers = ['X-Total-Count' => count($records)]);
    } catch (\Throwable $th) {

    }
    return $response;

})->where('any', '.*');
