<x-layout titulo="Familia profesional">

    <div class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3">

            <h1 class="text-2xl font-semibold">{{ $familia['nombre'] }}</h1>

            <p><strong>Código:</strong> {{ $familia['codigo'] }}</p>

            <p><strong>Nombre:</strong> {{ $familia['nombre'] }}</p>

            <p><strong>Descripción:</strong> {{ $familia['descripcion'] }}</p>



            <div class="flex gap-3 pt-2">

                <x-bookme.boton :href="route('familias-profesionales.edit', $id)">

                    Modificar

                </x-bookme.boton>

                <x-bookme.boton :href="route('familias-profesionales.index')" alt>

                    Volver al listado

                </x-bookme.boton>

            </div>

        </div>

    </div>

</x-layout>