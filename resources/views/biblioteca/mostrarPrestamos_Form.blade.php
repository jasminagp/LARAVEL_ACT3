@extends('app')

@section('title' , 'Actualizar préstamo')

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Modificar el préstamo "{{$prestamo->book_id}}"
    </h1>
    <form action="{{route('updateLibro')}}" method="POST" class="flex flex-col">
        @csrf
        <label for="" class="text-lila-fosc">Usuario:</label>
        <input type="text" name="user_id" value="{{$prestamo->user_id}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Libro:</label>
        <input type="text" name="book_id" value="{{$prestamo->book_id}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Fecha Préstamo:</label>
        <input type="date" name="fecha_prestamo" value="{{$prestamo->fecha_prestamo}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Fecha Devolución:</label>
        <input type="date" name="fecha_devolucion" value="{{$prestamo->fecha_devolucion}}" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <input type="submit" value="Actualizar los datos" class="text-center rounded-md bg-beig px-3 py-2 text-bold font-semibold text-lila-fosc border-beig hover:bg-gray-50">
    </form>
@endsection