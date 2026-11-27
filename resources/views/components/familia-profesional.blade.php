@props(['id', 'familia'])
<div class="py-6 borde-b border-gray-200">
    <p class="text-sm text-gray-600">
        <span class="font-semibold">Código</span>{{ $familia['codigo'] }}
    </p>
    <h2 class="text-2xl font-bold text-gray-800">
        {{ $familia['nombre'] }}
    </h2>
    <a href="{{ route('familias-profesionales.show', $id) }}"
    class="inline-block mt-3 px-6 py-2 border border-orange-400 rounded font-semibold text-gray-700 hover:bg-orange-50">
    Detalles    
    </a>
</div>
