<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'rut', 'nombres', 'apellidos', 'sexo', 'edad', 'direccion', 'sector', 'telefono', 'fecha_nacimiento',
    ];

    public function patologias()
    {
        return $this->belongsToMany(Patologia::class);
    }

    public function complicacions()
    {
        return $this->belongsToMany(Complicacion::class);
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }
}
