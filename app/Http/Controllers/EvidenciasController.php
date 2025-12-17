<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use Illuminate\Http\Request;

class EvidenciasController extends Controller
{
    public function getIndex()
    {
        $evidencias = Evidencia::all();
        return view('evidencias.index')
            ->with('evidencias', $evidencias);
    }

    public function getShow($id)
    {
        $evidencia = Evidencia::findOrFail($id);
        return view('evidencias.show')
            ->with('evidencia', $evidencia)
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('evidencias.create');
    }


    public function getEdit($id)
    {
        $evidencia = Evidencia::findOrFail($id);
        return view('evidencias.edit')
            ->with('evidencia', $evidencia);
    }

    public function postCreate(Request $request)
    {
        $evidencia = new Evidencia();
        $evidencia->estudiante_id = $request->input('estudiante_id');
        $evidencia->tarea_id = $request->input('tarea_id');
        $evidencia->url = $request->input('url');
        $evidencia->descripcion = $request->input('descripcion');
        $evidencia->estado_validacion = $request->input('estado_validacion', 'pendiente');
        $evidencia->save();

        return redirect()->route('evidencias.show', ['id' => $evidencia->id]);
    }
    public function update(Request $request, $id)
    {
        
        $evidencia = Evidencia::findOrFail($id);
        $evidencia->estudiante_id = $request->input('estudiante_id');
        $evidencia->tarea_id = $request->input('tarea_id');
        $evidencia->url = $request->input('url');
        $evidencia->descripcion = $request->input('descripcion');
        $evidencia->estado_validacion = $request->input('estado_validacion', 'pendiente');
        $evidencia->save();

        return redirect()->route('evidencias.show', [$evidencia->id]);
    }
}
