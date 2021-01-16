<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    public function facultad()
    {
        return $this->hasMany(Facultad::class);
    }
}
