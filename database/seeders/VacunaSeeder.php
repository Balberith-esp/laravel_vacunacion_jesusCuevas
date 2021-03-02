<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Vacuna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VacunaSeeder extends Seeder
{
    private $vacunas = ['Pfizer-BioNTech', 'Moderna', 'Oxford-AstraZeneca', 
        'Sputnik V', 'Johnson & Johnson', 'Novavax', 'Sinovac'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->vacunas as $nombreVacuna)
        {
            $vacuna = new Vacuna();
            $vacuna->nombre = $nombreVacuna;
            $vacuna->slug = Str::slug($nombreVacuna);
            $vacuna->save();
        

            //Generar un número aleatorio de grupos
            $numeroGrupos = rand(2,7);
            for($i=0;$i<$numeroGrupos;$i++)
            {
                $grupo = Grupo::all()->random()->id;
                $vacuna->grupos()->syncWithoutDetaching($grupo);
            }
        }
        
    }
}
