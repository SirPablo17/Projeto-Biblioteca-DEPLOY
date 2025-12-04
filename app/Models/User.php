<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword; // <--- 1. IMPORTANTE: Adicione esta linha

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_active', // <--- 2. IMPORTANTE: Adicionei isso para seu login funcionar
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',  // Garante que retorne true/false
            'is_active' => 'boolean', // Garante que retorne true/false
        ];
    }

    /**
     * Sobrescreve o envio padrão de reset de senha.
     * Em vez de enviar AGORA (e travar o site), coloca na fila para daqui a 2 segundos.
     */
    public function sendPasswordResetNotification($token)
    {
        // Usa a nossa nova classe que suporta filas
        // Não precisa mais do ->delay(), o 'implements ShouldQueue' já resolve.
        $this->notify(new \App\Notifications\QueuedResetPassword($token));
    }
}
