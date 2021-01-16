<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    public function actividad()
    {
        return $this->hasMany(Actividad::class);
    }
}
