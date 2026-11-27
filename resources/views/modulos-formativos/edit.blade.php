<x-layout :titulo="'Modificar módulo formativo ' . $id">
    <h2 class="text-4xl font-bold text-center">Modificar módulo formativo {{ $id }}</h2>

    <div class="px-4 py-8">
        <x-formulario-modulo-formativo
            :action="route('modulos-formativos.update', $id)"
            metodo="PUT"
            :modulo="$modulo"
            boton="Modificar módulo formativo" />
    </div>
</x-layout>
