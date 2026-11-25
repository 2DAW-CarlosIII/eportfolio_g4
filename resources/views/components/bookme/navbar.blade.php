<?php
use App\Http\Controllers\EvidenciaController;
?>
<nav>
    <ul class="flex gap-4 text-sm md:text-base">
        <li>
            <a href="/ciclos-formativos" class="hover:text-orange-500">Ciclos formativos</a>
            <a href="/" class="hover:text-orange-500">Inicio</a>
        </li>
        <li>
            <a href="{{ route('modulos-formativos.index') }}" class="hover:text-orange-500">
                Módulos formativos
            </a>
        </li>
        <li>
            <a href="/acerca" class="hover:text-orange-500">Acerca</a>
        </li>
        <li>
            <a href="" class="hover:text-orange-500">Evidencias</a>
        </li>
    </ul>
</nav>
