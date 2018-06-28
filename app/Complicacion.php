<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complicacion extends Model
{
    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }
}
