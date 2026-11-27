@props(['action', 'boton', 'modulo' => [], 'metodo' => null])

@php
    $campo = 'w-full rounded border border-gray-300 px-3 py-2';
    $etiqueta = 'mb-1 block text-sm font-medium';
    $error = 'mt-1 text-sm text-red-600';
@endphp

<form action="{{ $action }}" method="POST" class="mx-auto flex max-w-xl flex-col gap-4">
    @csrf
    @if ($metodo)
        @method($metodo)
    @endif

    <div>
        <label for="codigo_ciclo" class="{{ $etiqueta }}">Ciclo formativo</label>
        <input type="text" id="codigo_ciclo" name="codigo_ciclo" class="{{ $campo }}" value="{{ old('codigo_ciclo', $modulo['codigo_ciclo'] ?? '') }}">
        @error('codigo_ciclo') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="nombre" class="{{ $etiqueta }}">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="{{ $campo }}" value="{{ old('nombre', $modulo['nombre'] ?? '') }}">
        @error('nombre') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="codigo" class="{{ $etiqueta }}">Código</label>
        <input type="text" id="codigo" name="codigo" class="{{ $campo }}" value="{{ old('codigo', $modulo['codigo'] ?? '') }}">
        @error('codigo') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="horas_totales" class="{{ $etiqueta }}">Horas totales</label>
        <input type="number" id="horas_totales" name="horas_totales" class="{{ $campo }}" value="{{ old('horas_totales', $modulo['horas_totales'] ?? '') }}">
        @error('horas_totales') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="curso_escolar" class="{{ $etiqueta }}">Curso</label>
        <select id="curso_escolar" name="curso_escolar" class="{{ $campo }}">
            <option value=""></option>
            @foreach (['PRIMERO', 'SEGUNDO'] as $curso)
                <option value="{{ $curso }}" @selected(old('curso_escolar', $modulo['curso_escolar'] ?? '') === $curso)>{{ $curso }}</option>
            @endforeach
        </select>
        @error('curso_escolar') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="centro" class="{{ $etiqueta }}">Centro</label>
        <input type="text" id="centro" name="centro" class="{{ $campo }}" value="{{ old('centro', $modulo['centro'] ?? '') }}">
        @error('centro') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="descripcion" class="{{ $etiqueta }}">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4" class="{{ $campo }}">{{ old('descripcion', $modulo['descripcion'] ?? '') }}</textarea>
        @error('descripcion') <p class="{{ $error }}">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="cursor-pointer rounded border border-orange-500 bg-orange-500 px-6 py-2 text-sm font-bold text-white hover:bg-orange-600 md:text-base">{{ $boton }}</button>
</form>