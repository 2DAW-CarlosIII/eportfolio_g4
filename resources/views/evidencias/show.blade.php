@extends('layouts.master')

@section('content')
    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height:100px" />

        </div>
        <div class="col-sm-8">

            <h2><b>Descripcion: </b>{{ $evidencia->descripcion }}</h2>
            <h4><b>Url: </b>{{ $evidencia->url }}</h4>
@auth
            <a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getEdit'], ['id'=>$evidencia->id]) }}"
                class="button primary"> Editar
@endauth
            </a>
            <a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getIndex']) }}"
                class="button primary"> Listado evidencias

            </a>
        </div>
    </div>
@endsection
