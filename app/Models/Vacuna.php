<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
     return 'slug';
    }

    public function grupos()
    {
    return $this->belongsToMany(Grupo::class);
    }
}
