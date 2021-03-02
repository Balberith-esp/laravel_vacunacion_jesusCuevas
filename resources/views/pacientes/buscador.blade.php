@extends('layouts.master')

@section('titulo')
    <title>Index</title>
@endsection

@section('contenido')
<input id="busqueda" class="form-control mr-sm-3" type="text" placeholder="Buscar" aria-label="Buscar">
<script>
    $( function() {

      $( "#busqueda" ).autocomplete({
        source: function( query, result ) {
          $.ajax( {
            type:"POST",
            url: "{{url('pacientes/busquedaAjax')}}",
            dataType: "json",
            data: {
                "_token":"{{csrf_token()}}",
                "nombre":query['term']
            },
            success: function( data ) {
              result( data );
            }
          } );
        },
        position:{
            my:"left+0 top+9",
        }

      } );
    } );
    </script>
@endsection


