<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('hola/{nombre?}', function ($nombre = 'mundo') {
     return '¡Hola, ' . e($nombre) . '!';
 });

require __DIR__ . '/ciclos-formativos.php';

Route::get('perfil/{id?}', PerfilController::class)->whereNumber('id')->name('perfil');

 Route::get('centro', function () {
    return ['centro' => config('eportfolio.centro')];
 })->name('centro');
 