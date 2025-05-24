<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    
    protected $table = 'users';
    
    public function role(){
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function hasRole($role){
        return $this->roles && $this->roles->tipo == $role;
    }

    public function mesas(){
        return $this->belongsToMany(Mesa::class, 'reservas', 'id_usuario', 'id_mesa', 'id', 'id');
    }

    public function prestamos(){
        return $this->hasMany(Prestamo::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
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
        ];
    }
}
