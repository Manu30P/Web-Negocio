<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Puebla la base de datos de la aplicación con registros iniciales o de prueba (Semillas/Seeders).
     */
    public function run(): void
    {
        // Ejemplo para generar 10 usuarios aleatorios mediante factories: User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
