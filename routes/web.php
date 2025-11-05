<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Pantalla principal');
});

Route::get('login', function () {
    return ('Login usuario');
});

Route::get('logout', function () {
    return ('Logout usuario');
});

Route::get('familias-profesionales', function () {
    return ('Listado familias-profesionales');
});

Route::prefix('familias-profesionales')->group(function () {
    Route::get('/show/{id}', function ($id) {
        return ('Vista detalle familia-profesional: ' . $id);
    })->where('id', '[0-9]+');
});

Route::get('create', function () {
    return ('añadir familia-profesional');
});

Route::get('edit/{id}', function ($id) {
    return ('editar familia-profesional: ' . $id);
})->where('id', '[0-9]+');

Route::get( 'perfil{id}', function ($id = 'propio') {
    return ('Visualizar el usuario: ' . $id);
})->where('id', '[0-9]+');
