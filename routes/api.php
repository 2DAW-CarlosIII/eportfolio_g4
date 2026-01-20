<?php

use App\Http\Controllers\API\ComentarioController;
use App\Http\Controllers\API\EvaluacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas /api/v1
Route::prefix('v1')->group(function () {

    Route::apiResource('evaluaciones', EvaluacionController::class)
    ->parameters([
        'evaluaciones' => 'evaluacion'
    ]);

    Route::apiResource('comentarios', ComentarioController::class)
    ->parameters([
        'comentarios' => 'comentario'
    ]);

});

// Rutas PHP-CRUD-API
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

})->where('any', '.*')->middleware(['auth:sanctum']);
