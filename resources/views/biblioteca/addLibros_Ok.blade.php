@extends('app')

@section('title', "Respuesta formulario añadir")

@section('content')
    @if( $id > 0)
        
            <p>&#128079;  Se ha añadido correctamente</p>
       
    @else
       
            <p>&#128553;  Hay un error.</p>
       
    @endif
@endsection