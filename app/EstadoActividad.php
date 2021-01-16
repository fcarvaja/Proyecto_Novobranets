<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoActividad extends Model
{
    public function actividad()
    {
        return $this->hasMany(Actividad::class);
    }
}
