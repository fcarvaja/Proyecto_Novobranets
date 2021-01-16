<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ADMIN_TYPE = 'admin';
    const ALUMNO_TYPE = 'alumno';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }

    public function isAlumno()
    {
        return $this->type === self::ALUMNO_TYPE;
    }

    public function alumno()
    {
        return $this->hasOne(Alumno::class);
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
