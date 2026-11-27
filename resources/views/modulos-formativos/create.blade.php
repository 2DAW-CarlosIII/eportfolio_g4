<x-layout titulo="Nuevo módulo formativo">
    <h2 class="text-4xl font-bold text-center">Nuevo módulo formativo</h2>

    <div class="px-4 py-8">
        <x-formulario-modulo-formativo
            :action="route('modulos-formativos.store')"
            :modulo="['centro' => config('eportfolio.centro')]"
            boton="Añadir módulo formativo" />
    </div>
</x-layout>