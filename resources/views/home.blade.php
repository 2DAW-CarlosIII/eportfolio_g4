@props(['titulo' => 'null'])

<x-layout :titulo="$titulo">
    <h1>Portada del ePortfolio</h1>
    <p>Bienvenido a {{ config('eportfolio.centro') }}</p>
</x-layout>