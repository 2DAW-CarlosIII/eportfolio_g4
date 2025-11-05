<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Pantalla principal";
});

Route::get('login', function(){
    return "Login usuario";
});

Route::get('logout', function(){
    return "Logout usuario";
});

Route::get('familias-profesionales', function(){
    return "Listado familias profesionales";
});

Route::get('familias-profesionales/show/{id}', function($id){
    return "Vista detalle familia profesional $id";
}) -> where('id', '[0-9]+');

Route::get('familias-profesionales/create', function(){
    return "Añadir familia profesional";
});

Route::get('familias-profesionales/edit/{id}', function($id){
    return "Modificar familia profesional $id";
}) -> where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null){
    if ($id) {
        return "Visualizar el currículo de $id";
    } else {
        return "Visualizar el currículo propio";
    }
})-> where('id', '[0-9]+');
