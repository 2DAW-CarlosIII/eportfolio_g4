<?php

use App\Http\Controllers\CriteriosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CiclosFormativosController;
use App\Http\Controllers\FamiliasProfesionalesController;
use App\Http\Controllers\ResultadosAprendizajesController;
use App\Models\CriterioEvaluacion;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

// ----------------------------------------
Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);

    Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);

    Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow'])->where('id', '[0-9]+')->name('familias.show');

    Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [FamiliasProfesionalesController::class, 'store']);

    Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])->where('id', '[0-9]+');

    Route::post('/familias/create', [FamiliasProfesionalesController::class, 'postCreate'])->name('familias.postCreate');
});
// ----------------------------------------
Route::prefix('criterios')->group(function () {
    Route::get('/', [CriteriosController::class, 'getIndex']);

    Route::get('create', [CriteriosController::class, 'getCreate']);

    Route::get('show/{id}', [CriteriosController::class, 'getShow'])
        ->where('id', '[0-9]+')
        ->name('criterios.show');

    Route::get('edit/{id}', [CriteriosController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [CriteriosController::class, 'store']);

    Route::put('update/{id}', [CriteriosController::class, 'update'])->where('id', '[0-9]+');

    Route::post('/criterios/create', [CriteriosController::class, 'postCreate'])->name('criterios.postCreate');
});
Route::prefix('ciclos-formativos')->group(function () {
    Route::get('/', [CiclosFormativosController::class, 'getIndex']);

    Route::get('create', [CiclosFormativosController::class, 'getCreate']);

    Route::get('show/{id}', [CiclosFormativosController::class, 'getShow'])->where('id', '[0-9]+')->name('ciclo.show');

    Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [CiclosFormativosController::class, 'store']);

    Route::put('update/{id}', [CiclosFormativosController::class, 'update'])->where('id', '[0-9]+');

    Route::post('/ciclo/create', [CiclosFormativosController::class, 'postCreate'])->name('ciclo.postCreate');
});




Route::prefix('resultados-aprendizaje')->group(function () {

    Route::get('/', [ResultadosAprendizajesController::class, 'getIndex']);

    Route::get('create', [ResultadosAprendizajesController::class, 'getCreate']);
    
    Route::post('create', [ResultadosAprendizajesController::class, 'postCreate']);

    Route::get('show/{id}', [ResultadosAprendizajesController::class, 'getShow'])->where('id', '[0-9]+')->name('resultados-aprendizaje.show');

    Route::get('edit/{id}', [ResultadosAprendizajesController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::put('edit/{id}', [ResultadosAprendizajesController::class, 'putCreate'])->where('id', '[0-9]+');
});

