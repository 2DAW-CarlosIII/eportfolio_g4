<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __invoke($id=null)
    {
        return $id ? 'Perfil del usuario ' . $id : 'Mi perfil';
    }
}
