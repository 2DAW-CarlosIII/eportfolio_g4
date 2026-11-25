
@props(['id', 'modulo'])

<li>
    <strong>{{ $modulo['codigo'] }}</strong> -
    {{ $modulo['nombre'] }}
    (ciclo {{ $modulo['codigo_ciclo'] }})

    <a href="{{ route('modulos-formativos.show', $id) }}">
        Ver detalle
    </a>
</li>
