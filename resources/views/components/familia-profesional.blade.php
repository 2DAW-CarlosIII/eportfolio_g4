@props(['id', 'familia'])

<li>
    <a href="{{ route('familias-profesionales.show', $id) }}">
        {{ $familia['codigo'] }} - {{ $familia['nombre'] }}
    </a>
</li>