
@props(['action' => null, 'id' => null, 'cicloFormativo' => []])

<form
    action="{{ route('ciclos-formativos.'.$action, $id) }}"
    method="POST"
    class="w-full max-w-2xl rounded-2xl border border-orange-200 bg-white p-8 shadow-lg"
>
    @csrf

    @if ($action === 'update')
        @method('PUT')
    @endif

    <div class="mb-8 border-b border-orange-200 pb-5">
        <h3 class="text-2xl font-bold text-orange-800">
            {{ $action === 'update' ? 'Modificar ciclo formativo' : 'Nuevo ciclo formativo' }}
        </h3>
        <p class="mt-2 text-sm text-gray-500">
            {{ $action === 'update' ? 'Actualiza los datos del ciclo formativo.' : 'Rellena los siguientes campos para añadir un ciclo formativo.' }}
        </p>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

        <div class="flex flex-col gap-2">
            <label for="codigo_familia" class="font-semibold text-gray-700">
                Familia profesional
            </label>
            <input
                type="text"
                name="codigo_familia"
                id="codigo_familia"
                placeholder="Ej. ADG"
                value="{{ old('codigo_familia', $cicloFormativo['codigo_familia'] ?? '') }}"
                class="rounded-lg border border-orange-200 bg-orange-50 px-4 py-3 outline-none transition focus:border-orange-500 focus:ring-2 focus:ring-orange-200"
            >
            @error('codigo_familia')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="grado" class="font-semibold text-gray-700">
                Grado
            </label>
            <select
                name="grado"
                id="grado"
                class="rounded-lg border border-orange-200 bg-orange-50 px-4 py-3 outline-none transition focus:border-orange-500 focus:ring-2 focus:ring-orange-200"
            >
                <option value="">Selecciona un grado</option>
                <option value="basico" @selected(old('grado', $cicloFormativo['grado'] ?? '') === 'basico')>Básico</option>
                <option value="medio" @selected(old('grado', $cicloFormativo['grado'] ?? '') === 'medio')>Medio</option>
                <option value="superior" @selected(old('grado', $cicloFormativo['grado'] ?? '') === 'superior')>Superior</option>
            </select>
            @error('grado')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="codigo" class="font-semibold text-gray-700">
                Código del ciclo
            </label>
            <input
                type="text"
                name="codigo"
                id="codigo"
                placeholder="Ej. ADG301"
                value="{{ old('codigo', $cicloFormativo['codigo'] ?? '') }}"
                class="rounded-lg border border-orange-200 bg-orange-50 px-4 py-3 outline-none transition focus:border-orange-500 focus:ring-2 focus:ring-orange-200"
            >
            @error('codigo')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="nombre" class="font-semibold text-gray-700">
                Nombre del ciclo formativo
            </label>
            <input
                type="text"
                name="nombre"
                id="nombre"
                placeholder="Introduce el nombre del ciclo"
                value="{{ old('nombre', $cicloFormativo['nombre'] ?? '') }}"
                class="rounded-lg border border-orange-200 bg-orange-50 px-4 py-3 outline-none transition focus:border-orange-500 focus:ring-2 focus:ring-orange-200"
            >
            @error('nombre')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="descripcion" class="font-semibold text-gray-700">
                Descripción
            </label>
            <textarea
                name="descripcion"
                id="descripcion"
                rows="5"
                placeholder="Describe brevemente el ciclo formativo..."
                class="resize-y rounded-lg border border-orange-200 bg-orange-50 px-4 py-3 outline-none transition focus:border-orange-500 focus:ring-2 focus:ring-orange-200"
            >{{ old('descripcion', $cicloFormativo['descripcion'] ?? '') }}</textarea>
            @error('descripcion')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <div class="mt-8 flex flex-col-reverse justify-end gap-3 border-t border-orange-100 pt-6 sm:flex-row">
        <a
            href="{{ $action === 'update' ? route('ciclos-formativos.show', $id) : route('ciclos-formativos.index') }}"
            class="rounded-lg border border-orange-300 px-6 py-3 text-center font-semibold text-orange-800 transition hover:bg-orange-50"
        >
            Cancelar
        </a>

        <button
            type="submit"
            class="rounded-lg bg-orange-600 px-6 py-3 font-semibold text-white shadow-md transition hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2"
        >
            {{ $action === 'update' ? 'Guardar cambios' : 'Añadir ciclo formativo' }}
        </button>
    </div>
</form>
