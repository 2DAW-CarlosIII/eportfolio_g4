@props(['titulo' => 'null'])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        Bienvenido a {{ config('eportfolio.centro') }}
    </h2>
</x-layout>