@extends('app')

@section('title', "Formulario añadir libro")

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Añadir nuevo libro
    </h1>
    <form action="{{ route('addLibro')}}" method="POST" class="flex flex-col">
        @csrf
        <label for="" class="text-lila-fosc">Título:</label>
        <input type="text" name="titulo" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Autor:</label>
        <input type="text" name="autor" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Género:</label>
        <input type="text" name="genero" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Año publicación:</label>
        <input type="number" name="año_publicacion" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Disponiblidad:</label>
        <input type="text" name="disponible" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">


        <input type="submit" value="Añadir libro" class="text-center rounded-md bg-beig px-3 py-2 text-bold font-semibold text-lila-fosc border-beig hover:bg-gray-50">
    </form>
@endsection
