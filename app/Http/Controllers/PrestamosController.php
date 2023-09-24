<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PrestamosController extends Controller
{
    public function showFormularioAñadirPrestamo(){
        $titulo = "Añadir Prestamo";
        return view('biblioteca.addPrestamos_Formulario' , compact('titulo') );
    }

    public function addPrestamoFormulario(Request $request){
        $id_prestamo = Prestamos::create($request);
        return view('biblioteca.addPrestamos_Ok' , ['id' => $id_prestamo] );
    }

    public function showAllPrestamos(){
        $prestamos = Prestamos::allPrestamos();
        return view('biblioteca.mostrarPrestamos')->with('prestamos', $prestamos);
    }

    
    public function deletePrestamo($id){
        Prestamos::destroy($id);
        return Redirect::to('/showPrestamos');
    }

    public function updatePrestamoForm($id){
        $prestamo = Prestamos::findPrestamoID($id);
        Session::flash('id' , $id);
        return view('biblioteca.mostrarPrestamos_Form', compact('Prestamo'));
    }

    public function updatePrestamo(Request $request){
        $id = Session::get('id');
        Prestamos::uptatedID($id, $request);

        return Redirect::to('/showPrestamos');
    }
}
