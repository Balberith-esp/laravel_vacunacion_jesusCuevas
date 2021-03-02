<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Vacuna;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PacienteController extends Controller
{
    public function busquedaAjax(Request $request){
        $nombreBuscado= $request->nombre;

        $pacientes = Paciente::select('nombre')
                            ->where('nombre','like',"%$nombreBuscado%")->pluck('nombre');

        return $pacientes;
    }
    public function edit(Paciente $paciente)
    {
        //
        $paciente->vacunado = 1;
        $paciente->fechaVacuna= Carbon::now();
        $paciente->save();
        return redirect()->back()->with('mensaje','El paciente'.$paciente->nombre.' ha sido vacunado');
    }

    public function buscar(){
        return view('pacientes.buscador');
    }

}
