<x-layout titulo="Nueva familia profesional">
    <h1 class="text-2xl font-bold text-gray-800mb-6">Nueva familia profesional</h1>
    <form action="{{ route('familias-profesionales.store') }}" method="POST"
    class="space-y-5 bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
        @csrf

        <div>
            <label for="codigo" class="block text-sm font-semibold text-gray-700 mb-1">Código</label>
            <input type="text" id="codigo" name="codigo" value="{{ old('codigo') }}"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">
            @error('codigo')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">
            @error('nombre')
                <div>{{ $message }}</div>
            @enderror
        </div>
          <div>
            <label for="descripcion" class="block text-sm font-semibold text-gray-700 mb-1">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500">
            @error('descripcion')
                <div>{{ $message }}</div>
            @enderror
        </div>
    <button type="submit" class="px-6 py-2 rounded bg-orange-500 text-white font-semibold hover:bg-orange-600"
        >Añadir familia profesional
    </button>
    </form>
</x-layout>