@props(['titulo' => null])

<x-layout :titulo="$titulo">
    <p>Bienvenido a {{ config('eportfolio.centro') }}</p>
</x-layout>