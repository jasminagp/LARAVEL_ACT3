@extends('app')

@section('title' , 'Mostrar Libros')

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Listado de libros
    </h1>
    <form action="{{ route('showAllLibrosTitulo') }}" method="POST" class="flex flex-row mb-3 gap-1">
        @csrf
        <label for="" class="dark:beig p-2 text-lila-fosc">Título:</label>
        <input type="text" class="rounded text-lila border bg-white border-beig px-1" name="titulo">
        <input type="submit" value="Buscar" class="text-center rounded-md bg-beig px-3 py-2 text-bold font-semibold text-lila-fosc border-beig hover:bg-gray-50">
    </form>


    @if ($libros->isEmpty())
        <p class="alert">&#129335; No hay libros, añade libros <a href="/formAddLibro" class="decoration-1">aquí</a></p>
    @else
        <table class="table-fixed text-sm border-collapse">
            <thead>
                <tr>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Título </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Autor </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Género</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Año publicación</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Disponible</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table', $libros , 'libro')
            </tbody>
        </table>
    @endif
@endsection