<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
