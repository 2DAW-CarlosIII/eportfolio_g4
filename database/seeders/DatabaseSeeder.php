<?php

namespace Database\Seeders;

use App\Http\Controllers\CiclosFormativosController;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
        public function run(): void
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Model::unguard();
        Schema::disableForeignKeyConstraints();

        // llamadas a otros ficheros de seed
        $this->call(FamiliasProfesionalesTableSeeder::class);
        // llamadas a otros ficheros de seed

        Model::reguard();

        Schema::enableForeignKeyConstraints();

    }

}
