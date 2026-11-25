<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/perfil/{id?}', PerfilController::class)->whereNumber('id')->name('perfil');

require __DIR__ . '/evidencias.php';


/*Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () { 
        return 'Listado de evidencias'; 
        })->name('index');

Route::get('hola/{nombre?}', function ($nombre = 'mundo') {
     return '¡Hola, ' . e($nombre) . '!';
 });

require __DIR__ . '/ciclos-formativos.php';

     Route::get('edit/{id}', function ($id) { 
        return 'Modificar evidencia ' . $id; 
        })->name('edit')->whereNumber('id');
});*/

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro'     => config('eportfolio.centro'),
    ];
})->name('acerca');

require __DIR__.'/modulos-formativos.php';
require __DIR__ .'/familias-profesionales.php';
