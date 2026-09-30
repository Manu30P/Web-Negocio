<?php

namespace App\Models;

// Para requerir verificación de correo obligatoria: descomentar e implementar MustVerifyEmail
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> - Habilita la creación de usuarios sintéticos para pruebas unitarias con UserFactory */
    use HasFactory, Notifiable;

    /**
     * Obtiene los atributos que deben ser casteados automáticamente a tipos de datos nativos PHP.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
