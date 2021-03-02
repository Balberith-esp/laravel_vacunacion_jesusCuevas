<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->name;
        $vacunado = $this->faker->boolean;
        if($vacunado){
            return [
                'nombre' => $nombre,
                'slug' => Str::slug($nombre),
                'vacunado' =>$vacunado,
                'grupo_id' => Grupo::all()->random()->id,
                'fechaVacuna' =>$this->faker->date,
            ];
        }else{
            return [
                'nombre' => $nombre,
                'slug' => Str::slug($nombre),
                'vacunado' =>$vacunado,
                'grupo_id' => Grupo::all()->random()->id,
            ];
        }
    }
}
