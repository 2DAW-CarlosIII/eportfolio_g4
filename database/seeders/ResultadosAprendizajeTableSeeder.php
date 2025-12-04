<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadosAprendizajeTableSeeder extends Seeder

/*  Schema::create('resultados_aprendizaje', function (Blueprint $table) {
            $table->id("modulo_formativo_id");
            $table->timestamps();
            $table->string('codigo',50);
            $table->string('descripcion');
            $table->float('peso_porcentaje',0,100); // ! Falta ajustar el max y el min
            $table->integer("orden");
             */
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resultados_aprendizaje')->truncate();
   
        foreach (self::$resultados_aprendizaje as $resultado_aprendizaje) {
            DB::table('resultados_aprendizaje')->insert([
                'modulo_formativo_id' => $resultado_aprendizaje['modulo_formativo_id'],
                'codigo' => $resultado_aprendizaje['codigo'],
                
                'descripcion' => $resultado_aprendizaje['descripcion'],
                'peso_porcentaje' => $resultado_aprendizaje['peso_porcentaje'],
                'orden' => $resultado_aprendizaje['orden'],

            ]);
        }
        $this->command->info('¡Tabla ciclos inicializada con datos!');
    }


    public static $resultados_aprendizaje = array(
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA1',
            'descripcion' => 'Identifica los conceptos fundamentales del módulo y su relación con el perfil profesional.',
            'peso_porcentaje' => 7.0,
            'orden' => 1
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA2',
            'descripcion' => 'Interpreta correctamente la información técnica y la documentación asociada al módulo.',
            'peso_porcentaje' => 7.0,
            'orden' => 2
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA3',
            'descripcion' => 'Aplica técnicas básicas relacionadas con los contenidos del módulo en contextos controlados.',
            'peso_porcentaje' => 7.0,
            'orden' => 3
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA4',
            'descripcion' => 'Resuelve tareas prácticas siguiendo procedimientos establecidos y criterios de calidad.',
            'peso_porcentaje' => 7.0,
            'orden' => 4
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA5',
            'descripcion' => 'Selecciona herramientas, equipos y materiales adecuados a cada actividad.',
            'peso_porcentaje' => 7.0,
            'orden' => 5
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA6',
            'descripcion' => 'Organiza el trabajo de forma eficiente siguiendo secuencias lógicas y seguras.',
            'peso_porcentaje' => 7.0,
            'orden' => 6
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA7',
            'descripcion' => 'Analiza problemas habituales del módulo y propone soluciones fundamentadas.',
            'peso_porcentaje' => 7.0,
            'orden' => 7
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA8',
            'descripcion' => 'Utiliza correctamente los equipos y recursos disponibles de forma responsable y segura.',
            'peso_porcentaje' => 7.0,
            'orden' => 8
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA9',
            'descripcion' => 'Aplica medidas de prevención de riesgos laborales adecuadas al contexto del módulo.',
            'peso_porcentaje' => 7.0,
            'orden' => 9
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA10',
            'descripcion' => 'Comprueba la calidad del trabajo realizado siguiendo criterios fijados previamente.',
            'peso_porcentaje' => 7.0,
            'orden' => 10
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA11',
            'descripcion' => 'Documenta correctamente las tareas realizadas utilizando formatos técnicos adecuados.',
            'peso_porcentaje' => 7.0,
            'orden' => 11
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA12',
            'descripcion' => 'Trabaja de forma cooperativa, comunicándose eficazmente y respetando roles y tiempos.',
            'peso_porcentaje' => 7.0,
            'orden' => 12
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA13',
            'descripcion' => 'Muestra iniciativa para resolver imprevistos y adaptarse a nuevas situaciones del módulo.',
            'peso_porcentaje' => 7.0,
            'orden' => 13
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA14',
            'descripcion' => 'Integra los aprendizajes adquiridos en actividades más complejas y globalizadas.',
            'peso_porcentaje' => 7.0,
            'orden' => 14
        ),
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'RA15',
            'descripcion' => 'Evalúa de manera crítica su propio desempeño proponiendo mejoras realistas.',
            'peso_porcentaje' => 7.0,
            'orden' => 15
        )
    );
}
