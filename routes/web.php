<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CiclosFormativosController;
use App\Http\Controllers\FamiliasProfesionalesController;
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

    Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow'])->where('id', '[0-9]+');

    Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [FamiliasProfesionalesController::class, 'store']);

    Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])->where('id', '[0-9]+');
});

Route::prefix('ciclos-formativos')->group(function () {
    Route::get('/', [CiclosFormativosController::class, 'getIndex']);

    Route::get('create', [CiclosFormativosController::class, 'getCreate']);

    Route::get('show/{id}', [CiclosFormativosController::class, 'getShow'])->where('id', '[0-9]+');

    Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [CiclosFormativosController::class, 'store']);

    Route::put('update/{id}', [CiclosFormativosController::class, 'update'])->where('id', '[0-9]+');
});

