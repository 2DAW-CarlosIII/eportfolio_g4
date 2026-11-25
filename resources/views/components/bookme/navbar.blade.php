<nav>
    <ul class="flex gap-4 text-sm md:text-base">
        <li>
            <a href="{{ route('home') }}" class="hover:text-orange-500">Inicio</a>
        </li>
        <li>
            <a href="{{route('ciclos-formativos.index')}}" class="hover:text-orange-500">Ciclos formativos</a>
        </li>
        <li>
            <a href="{{ route('modulos-formativos.index') }}" class="hover:text-orange-500">
                Módulos formativos
            </a>
        </li>
        <li>
            <a href="{{ route('evidencias.index') }}" class="hover:text-orange-500">Evidencias</a>
        </li>
        <li>
            <a href="{{ route('acerca')}}" class="hover:text-orange-500">Acerca</a>
        </li>
    </ul>
</nav>
