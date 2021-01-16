<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = [
        'titulo', 'fecha_inicio', 'fecha_termino'
    ];

    public function tipoActividad()
    {
        return $this->belongsTo(TipoActividad::class);
    }

    public function estadoActividad()
    {
        return $this->belongsTo(EstadoActividad::class);
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
