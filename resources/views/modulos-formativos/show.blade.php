
<x-layout :titulo="$modulo['nombre']">
    <h1>{{ $modulo['nombre'] }}</h1>

    <ul>
        <li>Código: {{ $modulo['codigo'] }}</li>
        <li>Nombre: {{ $modulo['nombre'] }}</li>
        <li>Código del ciclo: {{ $modulo['codigo_ciclo'] }}</li>
        <li>Horas totales: {{ $modulo['horas_totales'] }}</li>
        <li>Curso escolar: {{ $modulo['curso_escolar'] }}</li>
        <li>Centro: {{ $modulo['centro'] }}</li>
        <li>Descripción: {{ $modulo['descripcion'] }}</li>
    </ul>

    <a href="{{ route('modulos-formativos.edit', $id) }}">Editar</a>
    <a href="{{ route('modulos-formativos.index') }}">Volver al listado</a>
</x-layout>
