<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Vacuna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GrupoSeeder extends Seeder
{
    private $grupos = ['Residencias mayores', 'Sanitarios', 
            'Mayores de 80', 'Esenciales', 'Mayores de 70', 'Mayores de 55', 'Resto de población'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prioridad = 40;
        foreach(array_reverse($this->grupos) as $nombreGrupo)
        {
            $grupo = new Grupo();
            $grupo->nombre = $nombreGrupo;
            $grupo->slug = Str::slug($nombreGrupo);
            $grupo->prioridad = $prioridad;
            $grupo->save();
            $prioridad+=10;
        }
    }
}
