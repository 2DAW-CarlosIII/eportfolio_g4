@props(['titulo' => 'null', 'evidencias' => 'null'])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
    @foreach ($evidencias as $evidencia)
        <div class="flex justify-center">
            <x-bookme.member :frase="$evidencia['descripcion']" :nombre="'estudiante '.$evidencia['estudiante_id']" :puesto="'tarea '.$evidencia['tarea_id']">
                <x-slot:saberMas>
                    <x-bookme.boton naranja>{{$evidencia['url']}}</x-bookme.boton>
                </x-slot:saberMas>
            </x-bookme.member>
        </div>
    @endforeach
</x-layout>