<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiclosFormativosController extends Controller
{

    public function getIndex()
    {
        return view('ciclosFormativos.index', [
            'ciclos_formativos' => self::$ciclos
        ]);
    }

    public function getShow($id)
    {
        return view('ciclosFormativos.show')
            ->with('cicloFormativo',  self::$ciclos[$id])
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('ciclosFormativos.create');
    }

    public function getEdit($id)
    {
        return view('ciclosFormativos.edit')
            ->with('cicloFormativo',  self::$ciclos[$id])
            ->with('id', $id);
    }

};
