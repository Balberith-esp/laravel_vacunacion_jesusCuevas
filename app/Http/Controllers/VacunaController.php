<?php

namespace App\Http\Controllers;
use App\Models\Vacuna;
use App\Models\Paciente;
use Illuminate\Http\Request;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vacunas.index',['data'=>Vacuna::all()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacuna $vacuna)
    {
        //
        $pacientesNoVacunados = Paciente::where('vacunado','=','0')->get();
        $pacientesSiVacunados = Paciente::where('vacunado','=','1')->get();
        return view('vacunas.show',['data'=>$vacuna, 'pacientesNo'=>$pacientesNoVacunados,'pacientesSi'=>$pacientesSiVacunados]);
    }

}
