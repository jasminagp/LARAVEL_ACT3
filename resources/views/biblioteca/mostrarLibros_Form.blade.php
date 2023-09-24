@extends('app')

@section('title' , 'Actualizar libro')

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Modificar el libro "{{$libro->titulo}}"
    </h1>
    <form action="{{route('updateLibro')}}" method="POST" class="flex flex-col">
        @csrf
        <label for="" class="text-lila-fosc">Título:</label>
        <input type="text" name="titulo" value="{{$libro->titulo}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Autor:</label>
        <input type="text" name="autor" value="{{$libro->autor}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Género:</label>
        <input type="text" name="genero" value="{{$libro->genero}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Año publicación:</label>
        <input type="number" name="año_publicacion" value="{{$libro->año_publicacion}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Disponiblidad:</label>
        <input type="text" name="disponible" value="{{$libro->disponible}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <input type="submit" value="Actualizar los datos" class="text-center rounded-md bg-beig px-3 py-2 text-bold font-semibold text-lila-fosc border-beig hover:bg-gray-50">
    </form>
@endsection