<x-layout titulo="Familia profesional">
    <h1>{{  $familia['nombre'] }}</h1>
    <p>Código: {{ $familia['codigo'] }}</p>
    <p>Nombre: {{ $familia['nombre'] }}</p>
    <p>Descripcion: {{ $familia['descripcion'] }}</p>
    <a href="{{ route('familias-profesionales.edit', $id) }}">Modificar</a>
    <a href="{{ route('familias-profesionales.index') }}">Volver al listado</a>
</x-layout>
