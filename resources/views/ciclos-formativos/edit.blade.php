@props(['titulo' => 'null', 'id' => $id])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
    <div class="flex justify-center">
        <x-formulario-ciclo-formativo :action='"edit"' :id="$id"/>
    </div>
</x-layout>