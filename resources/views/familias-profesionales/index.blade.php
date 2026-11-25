<x-layout titulo="Familias profesionales">
    <h1>Familias profesionales</h1>
    <ul>
        @foreach ($familias as $id =>$familia)
            <x-familia-profesional :id="$id" :familia="$familia"/>
        @endforeach
    </ul>
</x-layout>