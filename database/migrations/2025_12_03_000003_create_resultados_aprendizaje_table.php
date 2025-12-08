<?php

namespace App\Http\Controllers;

use App\Models\ResultadoAprendizaje;

class ResultadosAprendizajesController extends Controller
{
    public function getIndex()
    {
        $resultados = ResultadoAprendizaje::all();

        return view('resultadosAprendizaje.index')
            ->with('resultadosAprendizajes', $resultados);
    }

    public function getShow($id)
    {
        $resultado = ResultadoAprendizaje::findOrFail($id);

        return view('resultadosAprendizaje.show')
            ->with('resultado', $resultado);
    }

    public function getCreate()
    {
        return view('resultadosAprendizaje.create');
    }

    public function getEdit($id)
    {
        $resultado = ResultadoAprendizaje::findOrFail($id);

        return view('resultadosAprendizaje.edit')
            ->with('resultado', $resultado);
    }
}
