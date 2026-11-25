@props(['titulo' => 'null', 'id' => $id])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
</x-layout>
