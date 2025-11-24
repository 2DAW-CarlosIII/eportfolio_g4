@extends('layouts.master')

@section('content')
    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height:100px" />

        </div>
        <div class="col-sm-8">

            <h2><b>Nombre: </b>{{ $familias_profesionales['nombre'] }}</h2>
            <h3><b>Dominio: </b>
                <a href="http://github.com/2DAW-CarlosIII/{{ $familias_profesionales['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $familias_profesionales['dominio'] }}
                </a>
            </h3>
            <h4><b>Docente: </b>{{ $familias_profesionales['docente_id'] }}</h4>
            <p><b>Metadatos: </b>
            <ul>
                @foreach ($familias_profesionales['metadatos'] as $indice => $metadato)
                    <li style="color: rgb(0, 0, 0)"><b>{{ $indice }}: {{ $metadato }}</b></li>
                @endforeach
            </ul>
            </p>
            <p>
                @if($familias_profesionales['metadatos']['calificacion'] >= 5)
                    Aprobado
                @else
                    Suspendido
                @endif
            </p>
            <p>
                @if ($familias_profesionales['metadatos']['calificacion'] >= 5)
                    <button style="background-color: red">Suspender</button>
                @else
                    <button style="background-color: blue">Aprobar</button>
                @endif
            </p>
            <a href="{{ action([App\Http\Controllers\FamiliasProfesionales-Controller::class, 'getEdit'], ['id' => $id]) }}"
                class="button primary"> Editar

            </a>
            <a href="{{ action([App\Http\Controllers\FamiliasProfesionales-Controller::class, 'getIndex']) }}"
                class="button primary"> Listado familias profesionales

            </a>


        </div>
    </div>
@endsection
