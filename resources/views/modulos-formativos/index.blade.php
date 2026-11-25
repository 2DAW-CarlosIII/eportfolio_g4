
<x-layout titulo="Módulos formativos">
    <h1>Módulos formativos</h1>

    <ul>
        @foreach ($modulos as $id => $modulo)
            <x-modulo-formativo :id="$id" :modulo="$modulo" />
        @endforeach
    </ul>
</x-layout>
