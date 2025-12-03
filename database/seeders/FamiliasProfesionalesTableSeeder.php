<?php

namespace Database\Seeders;

use App\Models\FamiliaProfesional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliasProfesionalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FamiliaProfesional::truncate();
        foreach (self::$familias_profesionales as $familia) {
            FamiliaProfesional::insert([
                'codigo' => $familia['codigo'],
                'nombre' => $familia['nombre'],
            ]);
        }
        $this->command->info('¡Tabla familias_profesionales inicializada con datos!');
    }

    /* `marcapersonalfp`.`familias_profesionales` */
    public static $familias_profesionales = array(
    array(
        'codigo' => 'A01',
        'tema' => 'Arquitecturas y tecnologías de programación web en entorno servidor',
        'criterios' => array(
            array('codigo' => 'a', 'descripcion' => 'Se han caracterizado y diferenciado los modelos de ejecución de código en el servidor y en el cliente web.'),
            array('codigo' => 'b', 'descripcion' => 'Se han reconocido las ventajas que proporciona la generación dinámica de páginas.'),
            array('codigo' => 'c', 'descripcion' => 'Se han identificado los mecanismos de ejecución de código en los servidores web.'),
            array('codigo' => 'd', 'descripcion' => 'Se han reconocido las funcionalidades que aportan los servidores de aplicaciones y su integración con los servidores web.'),
            array('codigo' => 'e', 'descripcion' => 'Se han identificado y caracterizado los principales lenguajes y tecnologías relacionados con la programación web en entorno servidor.'),
            array('codigo' => 'f', 'descripcion' => 'Se han verificado los mecanismos de integración de los lenguajes de marcas con los lenguajes de programación en entorno servidor.'),
            array('codigo' => 'g', 'descripcion' => 'Se han reconocido y evaluado las herramientas y frameworks de programación en entorno servidor.')
        )
    ),
    array(
        'codigo' => 'B02',
        'tema' => 'Sentencias ejecutables por un servidor web con integración de código en lenguajes de marcas',
        'criterios' => array(
            array('codigo' => 'a', 'descripcion' => 'Se han reconocido los mecanismos de generación de páginas web a partir de lenguajes de marcas con código embebido.'),
            array('codigo' => 'b', 'descripcion' => 'Se han identificado las principales tecnologías asociadas.'),
            array('codigo' => 'c', 'descripcion' => 'Se han utilizado etiquetas para la inclusión de código en el lenguaje de marcas.'),
            array('codigo' => 'd', 'descripcion' => 'Se ha reconocido la sintaxis del lenguaje de programación que se ha de utilizar.'),
            array('codigo' => 'e', 'descripcion' => 'Se han escrito sentencias simples y se han comprobado sus efectos en el documento resultante.'),
            array('codigo' => 'f', 'descripcion' => 'Se han utilizado directivas para modificar el comportamiento predeterminado.'),
            array('codigo' => 'g', 'descripcion' => 'Se han utilizado los distintos tipos de variables y operadores disponibles en el lenguaje.'),
            array('codigo' => 'h', 'descripcion' => 'Se han identificado los ámbitos de utilización de las variables.')
        )
    ),
    array(
        'codigo' => 'C03',
        'tema' => 'Bloques de sentencias embebidos en lenguajes de marcas',
        'criterios' => array(
            array('codigo' => 'a', 'descripcion' => 'Se han utilizado mecanismos de decisión en la creación de bloques de sentencias.'),
            array('codigo' => 'b', 'descripcion' => 'Se han utilizado bucles y se ha verificado su funcionamiento.'),
            array('codigo' => 'c', 'descripcion' => 'Se han utilizado matrices (arrays) para almacenar y recuperar conjuntos de datos.'),
            array('codigo' => 'd', 'descripcion' => 'Se han creado y utilizado funciones.'),
            array('codigo' => 'e', 'descripcion' => 'Se han utilizado formularios web para interactuar con el usuario del navegador web.'),
            array('codigo' => 'f', 'descripcion' => 'Se han empleado métodos para recuperar la información introducida en el formulario.'),
            array('codigo' => 'g', 'descripcion' => 'Se han añadido comentarios al código.')
        )
    ),
);

}
