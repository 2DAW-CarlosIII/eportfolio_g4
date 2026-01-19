<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ciclos_formativos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('familia_profesional_id')
                ->constrained('familias_profesionales')
                ->cascadeOnDelete();

            $table->string('nombre', 255);
            $table->string('codigo', 50)->unique();
            $table->enum('grado', ['medio', 'superior', 'basica', 'C.E. (superior)', 'C.E. (medio)'])->nullable();
            $table->text('descripcion')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ciclos_formativos');
    }
};
