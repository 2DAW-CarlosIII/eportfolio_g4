@props(['titulo' => null])

<x-bookme.layout :titulo="$titulo">
    @if (session('mensaje'))
        <div class="alert alert-succes">{{ session('mensaje') }}</div>
    @endif
    {{ $slot }}
</x-bookme.layout>