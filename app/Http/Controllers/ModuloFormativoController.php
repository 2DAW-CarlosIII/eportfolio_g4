<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloFormativoController extends Controller
{
    public function index(): View
    {
        return view('.index', ['proyectos' => $this->arrayProyectos]);
    }
}
