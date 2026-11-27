<x-layout titulo="Editar familia profesional">

    <div class="max-w-xl mx-auto px-4 py-10">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">Editar familia profesional</h1>



        <form action="{{ route('familias-profesionales.update', $id) }}" method="POST"

              class="space-y-5 bg-white p-6 rounded-lg border border-gray-200 shadow-sm">

            @csrf

            @method('PUT')



            <div>

                <label for="codigo" class="block text-sm font-semibold text-gray-700 mb-1">Código</label>

                <input type="text" id="codigo" name="codigo" value="{{ old('codigo', $familia['codigo']) }}"

                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">

                @error('codigo')

                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>

                @enderror

            </div>



            <div>

                <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>

                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $familia['nombre']) }}"

                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">

                @error('nombre')

                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>

                @enderror

            </div>



            <div>

                <label for="descripcion" class="block text-sm font-semibold text-gray-700 mb-1">Descripción</label>

                <textarea id="descripcion" name="descripcion" rows="4"

                          class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">{{ old('descripcion', $familia['descripcion'] ?? '') }}</textarea>

                @error('descripcion')

                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>

                @enderror

            </div>



            <button type="submit"

                    class="px-6 py-2 rounded bg-orange-500 text-white font-semibold hover:bg-orange-600">

                Modificar familia profesional

            </button>

        </form>

    </div>

</x-layout>