<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function vacunas()
    {
    return $this->belongsToMany(Vacuna::class);
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);

    }
}
