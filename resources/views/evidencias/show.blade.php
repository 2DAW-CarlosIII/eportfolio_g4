@props(['titulo' => 'null', 'evidencias' => 'null', 'id' => $id])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
    <div class="flex justify-center">
        <x-bookme.member :frase="$evidencias[$id]['descripcion']" :nombre="'estudiante '.$evidencias[$id]['estudiante_id']" :puesto="'tarea '.$evidencias[$id]['tarea_id']" :estado="$evidencias[$id]['estado_validacion']">
            <x-slot:saberMas>
                <x-bookme.boton naranja :href="$evidencias[$id]['url']">Evidencia de la tarea {{$evidencias[$id]['tarea_id']}}</x-bookme.boton>
            </x-slot:saberMas>
        </x-bookme.member>
    </div>
</x-layout>
