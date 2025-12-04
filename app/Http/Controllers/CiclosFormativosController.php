<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CicloFormativo;

class CiclosFormativosController extends Controller
{

    public function getIndex()
    {
        return view('ciclosFormativos.index', [
            'ciclos_formativos' => CicloFormativo::all()
        ]);
    }

    public function getShow($id)
    {
        return view('ciclosFormativos.show')
            ->with('cicloFormativo',  CicloFormativo::findOrFail($id))
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('ciclosFormativos.create');
    }

    public function getEdit($id)
    {
        return view('ciclosFormativos.edit')
            ->with('cicloFormativo',  CicloFormativo::findOrFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request)
    {
        $ciclo_formativo = new CicloFormativo();
        $ciclo_formativo->codigo = $request->input('codigo');
        $ciclo_formativo->nombre = $request->input('nombre');
        $ciclo_formativo->save();

        return redirect()->action([CiclosFormativosController::class, 'getIndex']);
    }

    public function putCreate(Request $request, $id)
    {
        $ciclo_formativo = CicloFormativo::findOrFail($id);
        $ciclo_formativo->codigo = $request->input('codigo');
        $ciclo_formativo->nombre = $request->input('nombre');
        $ciclo_formativo->save();

        return redirect()->action([CiclosFormativosController::class, 'getIndex']);
    }

    public function store(Request $request)
    {
        return $this->postCreate($request);
    }

};
