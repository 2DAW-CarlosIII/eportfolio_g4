<x-layout :titulo="$modulo['nombre']">
    <h2 class="text-4xl font-bold text-center">{{ $modulo['nombre'] }}</h2>

    <div class="mx-auto max-w-xl px-4 py-8">
        @if (session('mensaje'))
            <p class="mb-4 text-center text-green-700">{{ session('mensaje') }}</p>
        @endif

        <ul class="flex flex-col gap-2">
            <li>Código del ciclo: {{ $modulo['codigo_ciclo'] }}</li>
            <li>Nombre: {{ $modulo['nombre'] }}</li>
            <li>Código: {{ $modulo['codigo'] }}</li>
            <li>Horas totales: {{ $modulo['horas_totales'] }}</li>
            <li>Curso escolar: {{ $modulo['curso_escolar'] }}</li>
            <li>Centro: {{ $modulo['centro'] }}</li>
            <li>Descripción: {{ $modulo['descripcion'] }}</li>
        </ul>

        <div class="mt-6 flex justify-center gap-4">
            <x-bookme.boton naranja :href="route('modulos-formativos.edit', $id)">Editar</x-bookme.boton>
            <a href="{{ route('modulos-formativos.index') }}" class="self-center font-bold text-orange-500 underline">Volver al listado</a>
        </div>
    </div>
</x-layout>
