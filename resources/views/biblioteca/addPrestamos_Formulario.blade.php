@extends('app')

@section('title', "Formulario añadir prestamo")

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Añadir nuevo préstamo
    </h1>
    <form action="{{ route('addPrestamo')}}" method="POST" class="flex flex-col">
        @csrf

        <label for="" class="text-lila-fosc">Usuario:</label>
        <input type="text" name="user_id" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Libro:</label>
        <input type="text" name="book_id" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Fecha préstamo:</label>
        <input type="date" name="fecha_prestamo" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <label for="" class="text-lila-fosc">Fecha devolución:</label>
        <input type="date" name="fecha_devolucion" class="rounded text-lila border bg-white border-beig py-1 px-1 mb-2">
        <input type="submit" value="Añadir prestamo" class="text-center rounded-md bg-beig px-3 py-2 text-bold font-semibold text-lila-fosc border-beig hover:bg-gray-50">
    </form>
@endsection
