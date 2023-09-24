@extends('app')

@section('title' , 'Mostrar Préstamos')

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Listado de prestámos
    </h1>
    @if ($prestamos->isEmpty())
        <p class="alert">&#129335; No hay préstamos, añade préstamos <a href="/formAddPrestamo" class="decoration-1">aquí</a></p>
    @else
        <table class="table-fixed text-sm border-collapse">
            <thead>
                <tr>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Usuario </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Libro </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Fecha préstamo</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Fecha devolución</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table-prestamo', $prestamos , 'prestamo')
            </tbody>
        </table>
    @endif
@endsection