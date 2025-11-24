<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamiliasProfesionales-Controller;
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
    Route::get('/', [FamiliasProfesionales-Controller::class, 'getIndex']);

    Route::get('create', [FamiliasProfesionales-Controller::class, 'getCreate']);

    Route::get('show/{codigo}', [FamiliasProfesionales-Controller::class, 'getShow'])->where('id', '[0-9]+');

    Route::get('edit/{id}', [FamiliasProfesionales-Controller::class, 'getEdit'])->where('id', '[0-9]+');

    Route::post('store', [FamiliasProfesionales-Controller::class, 'store']);

    Route::put('update/{id}', [FamiliasProfesionales-Controller::class, 'update'])->where('id', '[0-9]+');
});

