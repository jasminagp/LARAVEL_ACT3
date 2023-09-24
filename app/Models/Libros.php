<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;




class Libros extends Model
{
    use HasFactory;

    public static function create(Request $request){
        $libro = new Libros();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->genero = $request->input('genero');
        $libro->año_publicacion = $request->input('año_publicacion');
        $libro->disponible = $request->input('disponible');
        $libro->save();

        return $libro->id;
    }
    public static function uptatedID($id , Request $request){
        $libro = Libros::find($id);
        $libro->autor = $request->input('autor');
        $libro->genero = $request->input('genero');
        $libro->año_publicacion = $request->input('año_publicacion');
        $libro->disponible = $request->input('disponible');
        $libro->save();
    }

    public static function destroy($ids)
    {
        $libro = Libros::find($ids);
        $libro->delete();
    }

    public static function allLibros(){
        return Libros::all();
    }

    public static function findLibroID($id){
        return Libros::find($id);
    }

    public static function findTitulo($titulo){
        return Libros::where('titulo' , '=' , $titulo)->get();
    }

}
