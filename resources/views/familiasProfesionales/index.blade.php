@extends('layouts.master')

@section('content')

    <div class="row">

    @foreach ($familias_profesionales as $key => $familiaProfesional)

    <div class="col-4 col-6-medium col-12-small">
        <section class="box">
            <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
            <header>
                <h3>{{ $familiaProfesional['nombre'] }}</h3>
            </header>
            <p>
                {{ $familiaProfesional['codigo'] }}
            </p>
            <footer>
                <ul class="actions">
                    <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getShow'], ['id' => $key] ) }}" class="button alt">Más info</a></li>
                </ul>
            </footer>
        </section>
    </div>

    @endforeach

</div>

@stop
