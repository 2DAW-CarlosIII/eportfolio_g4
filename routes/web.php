<?php

use App\Http\Controllers\CiclosFormativosController;
use App\Http\Controllers\CriteriosController;
use App\Http\Controllers\FamiliasProfesionalesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultadosAprendizajesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

    Route::get('/', [HomeController::class, 'getHome'])
    ->name('home');
});

// ----------------------------------------

Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);

    Route::get('create', [FamiliasProfesionalesController::class, 'getCreate'])
    ->middleware('auth');;

    Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow'])
    ->where('id', '[0-9]+')
    ->name('familias.show')
    ->middleware('auth');;

    Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit'])
    ->where('id', '[0-9]+')
    ->middleware('auth');;

    Route::post('store', [FamiliasProfesionalesController::class, 'store'])
    ->middleware('auth');;

    Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth');;

    Route::post('/familias/create', [FamiliasProfesionalesController::class, 'postCreate'])
    ->name('familias.postCreate')
    ->middleware('auth');;

    Route::put('edit/{id}', [FamiliasProfesionalesController::class, 'putCreate'])
    ->where('id', '[0-9]+')
    ->middleware('auth');;

    Route::group(['middleware' => 'auth'], function (){
        Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);
        Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit'])->where('id', '[0-9]+');
        Route::post('store', [FamiliasProfesionalesController::class, 'store']);
        Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])->where('id', '[0-9]+');
        Route::post('/ciclo/create', [FamiliasProfesionalesController::class, 'postCreate'])->name('ciclo.postCreate');
    });

});

// ----------------------------------------

Route::prefix('criterios')->group(function () {
    Route::get('/', [CriteriosController::class, 'getIndex']);

    Route::get('create', [CriteriosController::class, 'getCreate']);

    Route::get('show/{id}', [CriteriosController::class, 'getShow'])
        ->where('id', '[0-9]+')
        ->name('criterios.show');

    Route::get('edit/{id}', [CriteriosController::class, 'getEdit'])
    ->where('id', '[0-9]+');

    Route::post('store', [CriteriosController::class, 'store']);

    Route::put('update/{id}', [CriteriosController::class, 'update'])
    ->where('id', '[0-9]+');

    Route::post('/criterios/create', [CriteriosController::class, 'postCreate'])
    ->name('criterios.postCreate');

    Route::group(['middleware' => 'auth'], function (){
        Route::get('create', [CriteriosController::class, 'getCreate']);
        Route::get('edit/{id}', [CriteriosController::class, 'getEdit'])->where('id', '[0-9]+');
        Route::post('store', [CriteriosController::class, 'store']);
        Route::put('update/{id}', [CriteriosController::class, 'update'])->where('id', '[0-9]+');
        Route::post('/ciclo/create', [CriteriosController::class, 'postCreate'])->name('ciclo.postCreate');
    });

});

// ----------------------------------------

Route::prefix('ciclos-formativos')->group(function () {
    Route::get('/', [CiclosFormativosController::class, 'getIndex']);

    Route::get('create', [CiclosFormativosController::class, 'getCreate']);

    Route::get('show/{id}', [CiclosFormativosController::class, 'getShow'])
    ->where('id', '[0-9]+')->name('ciclo.show');

    Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit'])
    ->where('id', '[0-9]+');

    Route::post('store', [CiclosFormativosController::class, 'store']);

    Route::put('update/{id}', [CiclosFormativosController::class, 'update'])
    ->where('id', '[0-9]+');

    Route::post('/ciclo/create', [CiclosFormativosController::class, 'postCreate'])
    ->name('ciclo.postCreate');

    Route::group(['middleware' => 'auth'], function (){
        Route::get('create', [CiclosFormativosController::class, 'getCreate']);
        Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit'])->where('id', '[0-9]+');
        Route::post('store', [CiclosFormativosController::class, 'store']);
        Route::put('update/{id}', [CiclosFormativosController::class, 'update'])->where('id', '[0-9]+');
        Route::post('/ciclo/create', [CiclosFormativosController::class, 'postCreate'])->name('ciclo.postCreate');
    });

});

// ----------------------------------------

Route::prefix('resultados-aprendizaje')->group(function () {

    Route::get('/', [ResultadosAprendizajesController::class, 'getIndex']);

    Route::get('create', [ResultadosAprendizajesController::class, 'getCreate']);

    Route::post('create', [ResultadosAprendizajesController::class, 'postCreate']);

    Route::get('show/{id}', [ResultadosAprendizajesController::class, 'getShow'])
    ->where('id', '[0-9]+')
    ->name('resultados-aprendizaje.show');

    Route::get('edit/{id}', [ResultadosAprendizajesController::class, 'getEdit'])
    ->where('id', '[0-9]+');

    Route::put('edit/{id}', [ResultadosAprendizajesController::class, 'putCreate'])
    ->where('id', '[0-9]+');

    Route::group(['middleware' => 'auth'], function (){
        Route::get('create', [ResultadosAprendizajesController::class, 'getCreate']);
        Route::get('edit/{id}', [ResultadosAprendizajesController::class, 'getEdit'])->where('id', '[0-9]+');
        Route::post('store', [ResultadosAprendizajesController::class, 'store']);
        Route::put('update/{id}', [ResultadosAprendizajesController::class, 'update'])->where('id', '[0-9]+');
        Route::post('/resultados-aprendizaje/create', [ResultadosAprendizajesController::class, 'postCreate'])->name('resultados-aprendizaje.postCreate');
    });
});

require __DIR__.'/auth.php';
