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

};
