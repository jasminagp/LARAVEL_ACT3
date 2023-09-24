<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class LibrosController extends Controller
{
    public function showFormularioAñadirLibro(){
        $titulo = "Añadir Libro";
        return view('biblioteca.addLibros_Formulario' , compact('titulo') );
    }

    public function addLibroFormulario(Request $request){
        $id_libro = Libros::create($request);
        return view('biblioteca.addLibros_Ok' , ['id' => $id_libro] );
    }

    public function showAllLibros(){
        $libros = Libros::allLibros();
        return view('biblioteca.mostrarLibros')->with('libros', $libros);
    }

    
    public function deleteLibro($id){
        Libros::destroy($id);
        return Redirect::to('/showLibros');
    }

    public function updateLibroForm($id){
        $libro = Libros::findLibroID($id);
        Session::flash('id' , $id);
        return view('biblioteca.mostrarLibros_Form', compact('libro'));
    }

    public function updateLibro(Request $request){
        $id = Session::get('id');
        Libros::uptatedID($id, $request);

        return Redirect::to('/showLibros');
    }

    public function showAllLibrosTitulo(Request $request){
        $allLibroTitulo = Libros::findTitulo($request->input('titulo'));
        return view('biblioteca.mostrarLibros')->with('libros', $allLibroTitulo);
    }
}
