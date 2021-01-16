<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function alumno()
    {
        return $this->belongsToMany(Alumno::class);
    }

}
