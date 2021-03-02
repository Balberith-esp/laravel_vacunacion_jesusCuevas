@extends('layouts.master')

@section('titulo')
    <title>Index</title>
@endsection

@section('contenido')
<div class="contenedor">
    @foreach( $data as  $vacuna)
        <a href="{{ route('vacunas.show' , $vacuna) }}">
            <div class="col-sm-4 col-md-4" style="float: left;">
                <div class="panel panel-default">
                    <div class="panel-body">

                            {{-- <img src="{{asset('assets/img/')}}/{{$animal->imagen}}" class="rounded-circle" style="height:200px"/> --}}
                            {{-- <h4 style="min-height:45px;margin:5px 0 10px 0">{{$animal->especie}}</h4> --}}

                        <h4>{{$vacuna->nombre}}</h4>
                    </div>
                    <div class="panel-footer">
                        <h6>Posibles grupos de vacunacion</h6>
                        <ul>
                            @foreach ($vacuna->grupos as $item)
                            <li>{{$item['nombre']}}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection


