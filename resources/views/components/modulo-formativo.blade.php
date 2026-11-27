@props(['id', 'modulo'])

<li class="flex items-center justify-between gap-4 rounded border border-gray-200 px-4 py-3">
    <span>
        <strong>{{ $modulo['codigo'] }}</strong> - {{ $modulo['nombre'] }}
        (ciclo {{ $modulo['codigo_ciclo'] }})
    </span>
    <a href="{{ route('modulos-formativos.show', $id) }}" class="font-bold text-orange-500 underline">Ver detalle</a>
</li>
