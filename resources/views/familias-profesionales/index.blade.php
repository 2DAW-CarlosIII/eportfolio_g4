<x-layout titulo="Familias profesionales">
    <div>
        <h1 class="text-2xl font-semibold mb-4">Familias profesionales</h1>

        <a href="{{ route('familias-profesionales.create') }}"
        class="inline-block mb-6 px-4 py-2 border border-orange-500 rounded text-orange-500 font-medium hover:bg-orange-500 hover:text-white">
        Añadir familia profesional
        </a>
        <div class="grid gap-x-8 sm:grid-cols-2">
            @foreach ($familias as $id =>$familia)
                <x-familia-profesional :id="$id" :familia="$familia"/>
            @endforeach
        </div>
    </div
</x-layout>