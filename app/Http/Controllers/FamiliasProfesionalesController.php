<?php

namespace App\Http\Controllers;
use App\Models\FamiliaProfesional;

use Illuminate\Http\Request;

class FamiliasProfesionalesController extends Controller
{

    public function getIndex()
    {
        return view('familiasProfesionales.index', [
            'familias_profesionales' => FamiliaProfesional::all()
        ]);
    }

    public function getShow($id)
    {
        return view('familiasProfesionales.show')
            ->with('familiaProfesional', FamiliaProfesional::findOrFail($id))
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('familiasProfesionales.create');
    }

    public function getEdit($id)
    {
        return view('familiasProfesionales.edit')
            ->with('familiaProfesional',  FamiliaProfesional::findOrFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request) {
        $familia_profesional = new FamiliaProfesional();
        $familia_profesional = $request->input('codigo');
        $familia_profesional = $request->input('nombre');
        $familia_profesional->save();
        return redirect()->action([FamiliasProfesionalesController::class, 'getShow'], ['id' => $familia_profesional->id]);
    }

    public function putCreate(Request $request, $id) {
        $familia_profesional = FamiliaProfesional::findOrFail($id);
        $familia_profesional = $request->input('codigo');
        $familia_profesional = $request->input('nombre');
        $familia_profesional->save();
        return redirect()->action([FamiliasProfesionalesController::class, 'getShow'], ['id' => $familia_profesional->id]);
    }
};
