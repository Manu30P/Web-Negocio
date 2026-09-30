<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Factory para generar datos de prueba y semillas (seeders) sintéticos para el modelo User.
 *
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Contraseña encriptada en caché compartida para acelerar la generación de múltiples registros.
     */
    protected static ?string $password;

    /**
     * Define los atributos y datos ficticios por defecto del modelo User (usando la librería Faker).
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Estado personalizado: Genera un usuario con la verificación de correo pendiente (`email_verified_at` = null).
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
