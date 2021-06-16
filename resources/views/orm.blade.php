@extends('layouts.plantilla')

@section('contenido')

{{-- ORM --}}
{{-- Eloquent -> Mapeo de Objeto Relacional --}}
{{-- Manejar de una forma fácil y sencilla los procesos correspondientes al manejo de bases de datos en nuestro proyecto --}}


{{-- CREANDO UN FORMULARIO --}}
 <form class="form-group" method="POST" action="PREGUNTAR A PAYTAN">
     {{-- PARA QUE NO PODAMOS RECIBIR VULNERACION DE VALIDACIONES --}}
    @csrf
    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="name" class="form-control">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
    
@endsection