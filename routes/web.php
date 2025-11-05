<?php




use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isEmpty;

Route::get('/', function () { //GET	/	Pantalla principal
    return "Pantalla principal";
});

Route::get('/login', function () { //GET	login	Login usuario
    return "Login usuario";
});
Route::get('/logout', function () { //GET	logout	Logout usuario
    return "Logout usuario";
});

Route::prefix('/familias-profesionales')->group(function () {

    Route::get('/', function () { // GET	familias-profesionales	Listado de familias profesionales
        return "Listado de familias profesionales";
    });


    Route::get('/familias-profesional/{id}', function ($id) { //GET	familias-profesional/{id}	Vista detalle familia profesional id
        return "Vista detalle familia profesional $id";
    })->where('id', '[0-9]+');




    Route::get('/create', function () { //GET	familias-profesionales/create	Añadir familia profesionale
        return "Añadir familia profesional";
    });

    Route::get('/edit/{id}', function ($id) { //GET	familias-profesionales/edit/{id}	Modificar familia profesionale id
        return "Modificar familia profesional $id";
    })->where('id', '[0-9]+');
});


Route::get('/perfil/{id?}', function ($id) { //GET	perfil/{id}	Visualizar el usuario de {id}
    $mensaje="";
    if(isset($id) && !empty($id)){ // Si no es nulo o vacio id
       $mensaje= "Visualizar usuario de $id"; // Envio mensaje 1
    } else {
        $mensaje = "Visualizar usuario propio"; // si no mensaje 2
    }
    return $mensaje;

})->where('id', '[0-9]+');


