<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
}
