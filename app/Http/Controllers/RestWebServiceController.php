<?php

namespace App\Http\Controllers;
use App\Models\Vacuna;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class RestWebServiceController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $nuevaVacuna = new Vacuna();
        $nuevaVacuna->nombre = $request->nombre;
        $nuevaVacuna->slug = Str::slug($request->nombre);
        $nuevaVacuna->save();
        return response()->json(['mensaje'=>"La vacuna".$request->nombre." se ha creado correctamente"]);

    }

    public function mostrar ($id){

        return response()->json(Vacuna::all());
    }


}
