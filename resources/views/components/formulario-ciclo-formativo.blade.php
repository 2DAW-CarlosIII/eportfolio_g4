@props(['action' => null, 'id' => null])

<form action="{{ route('ciclos-formativos.'.$action, $id) }}" method="POST" class="grid max-w-xl grid-cols-2 gap-4">
    @csrf
    @isset($id)
        @method('PUT')
    @endisset
    <div class="flex flex-col">
        <label for="codigo_familia" class="font-semibold">codigo familia</label>
        <input type="number" name="codigo_familia" id="codigo_familia"
               value="{{ old('codigo_familia') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="flex flex-col">
        <label for="grado" class="font-semibold">grado</label>
        <input type="number" name="grado" id="grado"
               value="{{ old('grado') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="col-span-2 flex flex-col">
        <label for="codigo" class="font-semibold">codigo</label>
        <input type="text" name="codigo" id="codigo"
               value="{{ old('codigo') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="col-span-2 flex flex-col">
        <label for="nombre" class="font-semibold">nombre</label>
        <textarea name="nombre" id="nombre" rows="4"
                  class="mt-1 w-full rounded border p-2">{{ old('nombre') }}</textarea>
    </div>

        <div class="col-span-2 flex flex-col">
        <label for="descripcion" class="font-semibold">descripcion</label>
        <textarea name="descripcion" id="descripcion" rows="4"
                  class="mt-1 w-full rounded border p-2">{{ old('descripcion') }}</textarea>
    </div>


  

    <div class="col-span-2">
        <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white">
            Añadir evidencia
        </button>
    </div>
</form>