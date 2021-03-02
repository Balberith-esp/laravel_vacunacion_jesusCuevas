@extends('layouts.master')

@section('titulo')
    <title>Index</title>
@endsection

@section('contenido')

@if(session('mensaje'))
    {{session('mensaje')}}
@endif


    <h1>{{$data->nombre}}</h1>
    <h2>Pacientes no vacunados</h2>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Grupo de vacunacion</th>
            <th>Prioridad</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach ($pacientesNo as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->grupo->nombre}}</td>
                    <td>{{$item->grupo->prioridad}}</td>
                    <td><a href="{{ route('pacientes.vacunar' , $item) }}">Vacunar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Pacientes vacunados</h2>

    @foreach( $data->grupos as  $grupo)
        {{$grupo->nombre}}
        @foreach( $grupo->pacientes as  $paciente)
            <ul>
                @if ($paciente->vacunado)
                    <li>{{$paciente->nombre}}&nbsp;////&nbsp;{{$paciente->fechaVacuna}}</li>
                @endif

            </ul>

        @endforeach
    @endforeach

@endsection


