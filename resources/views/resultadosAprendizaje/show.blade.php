@extends('layouts.master')

@section('content')
    <div class="row m-4">

        <div class="col-sm-4">
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />
        </div>

        <div class="col-sm-8">

            <h2>Código: {{ $resultado->codigo }}</h2>

            <h3>Descripción:</h3>
            <p>{{ $resultado->descripcion }}</p>

            <p><strong>Peso (%):</strong> {{ $resultado->peso_porcentaje }}</p>
            <p><strong>Orden:</strong> {{ $resultado->orden }}</p>
            <p><strong>Módulo formativo ID:</strong> {{ $resultado->modulo_formativo_id }}</p>

            @auth
                <a href="{{ action([App\Http\Controllers\ResultadosAprendizajesController::class, 'getEdit'], ['id' => $resultado->id]) }}"
                    class="button alt">
                    Editar resultado
                </a>

            @endauth



            <a href="{{ action([App\Http\Controllers\ResultadosAprendizajesController::class, 'getIndex']) }}"
                class="button alt">
                Volver al listado
            </a>

            </ul><br>

        </div>

    </div>
@endsection
