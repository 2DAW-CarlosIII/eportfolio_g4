@props(['nombre' => null, 'puesto' => null, 'frase' => null, 'imagen' => null, 'estado' => null])

<div class="p-6 rounded border bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
    <p>
        {{$frase}}
    </p>
    <div class="flex items-center gap-4">
        @isset($imagen)
            <div>
                <img class="w-20 rounded-full border"
                src="{{ $imagen }}" alt="">
            </div>
        @endisset
        <div class="flex flex-col">
            <strong>{{$nombre}}</strong>
            <small>{{$puesto}}</small>
        </div>
    </div>
    @isset($estado)
        @if ($estado == "rechazada")
            <p style="color:red">{{$estado}}</p>
        @elseif ($estado == "validada")
            <p style="color:green">{{ $estado }}</p>
        @elseif ($estado == "pendiente")
            <p style="color:#cf950e">{{ $estado }}</p>
        @elseif ($estado == "asignada")
            <p style="color:blue">{{ $estado }}</p>
        @endif
    @endisset
    @isset($saberMas)
        {{ $saberMas }}
    @endisset
</div>