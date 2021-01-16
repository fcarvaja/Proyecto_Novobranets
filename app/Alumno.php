<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function curso()
    {
        return $this->belongsToMany(Curso::class);
    }

    public function actividad()
    {
        return $this->hasMany(Actividad::class);
    }

}

