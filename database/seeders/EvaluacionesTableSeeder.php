<?php

namespace Database\Seeders;

use App\Models\Evaluacion;
use App\Models\Evidencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evaluaciones = DB::table('evaluaciones')->get();

        foreach ($evaluaciones as $evaluacion) {
            $evidencia = Evidencia::where('id', $evaluacion['evidencia_id']);



        }
        $this->command->info('¡Tabla evidencias inicializada con datos!');
    }
}
