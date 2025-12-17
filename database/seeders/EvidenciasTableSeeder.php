<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Evidencia;

class EvidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evidencia::truncate();
        foreach (self::$evidencias as $evidencia) {
            Evidencia::insert([
                'estudiante_id' => $evidencia['estudiante_id'],
                'tarea_id' => $evidencia['tarea_id'],
                'url' => $evidencia['url'],
                'descripcion' => $evidencia['descripcion'],
                'estado_validacion' => $evidencia['estado_validacion'],
            ]);
        }
        $this->command->info('¡Tabla evidencias inicializada con datos!');
    }

    /* `marcapersonalfp`.`evidencias` */
     public static $evidencias = array(
        array(
            'id' => 1,
            'estudiante_id' => 1,
            'tarea_id' => 1,
            'descripcion' => 'Proyecto de desarrollo web con Laravel',
            'url' => 'https://github.com/alumno/proyecto-laravel',
            'estado_validacion' => 'validada'
        ),
        array(
            'id' => 2,
            'estudiante_id' => 1,
            'tarea_id' => 2,
            'descripcion' => 'Documentación técnica del proyecto',
            'url' => 'https://drive.google.com/documentacion.pdf',
            'estado_validacion' => 'pendiente'
        ),
        array(
            'id' => 3,
            'estudiante_id' => 2,
            'tarea_id' => 1,
            'descripcion' => 'Presentación en Slides del trabajo final',
            'url' => 'https://slides.com/presentacion-final',
            'estado_validacion' => 'rechazada'
        ),
        array(
            'id' => 4,
            'estudiante_id' => 2,
            'tarea_id' => 3,
            'descripcion' => 'Repositorio de código en GitHub',
            'url' => 'https://github.com/alumno/codigo-fuente',
            'estado_validacion' => 'validada'
        ),
        array(
            'id' => 5,
            'estudiante_id' => 3,
            'tarea_id' => 2,
            'descripcion' => 'Video demostrativo del funcionamiento',
            'url' => 'https://youtube.com/demo-proyecto',
            'estado_validacion' => 'pendiente'
        ),
    );
}

