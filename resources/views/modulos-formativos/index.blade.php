<x-layout titulo="Módulos formativos">
    <h2 class="text-4xl font-bold text-center">Módulos formativos</h2>

    <div class="mx-auto max-w-3xl px-4 py-8">
        @if (session('mensaje'))
            <p class="mb-4 text-center text-green-700">{{ session('mensaje') }}</p>
        @endif

        <div class="mb-6 flex justify-center">
            <x-bookme.boton naranja :href="route('modulos-formativos.create')">Añadir módulo formativo</x-bookme.boton>
        </div>

        <ul class="flex flex-col gap-3">
            @foreach ($modulos as $id => $modulo)
                <x-modulo-formativo :id="$id" :modulo="$modulo" />
            @endforeach
        </ul>
    </div>
</x-layout>
