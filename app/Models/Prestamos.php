<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\User;

class Prestamos extends Model
{
    use HasFactory;
    public static function create(Request $request){
        $prestamo = new Prestamos();
        $prestamo->user_id = $request->input('user_id');
        $prestamo->book_id = $request->input('book_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->save();

        return $prestamo->id;
    }
    public static function uptatedID($id , Request $request){
        $prestamo = Prestamos::find($id);
        $prestamo->user_id = $request->input('user_id');
        $prestamo->book_id = $request->input('book_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->save();
    }

    public static function destroy($ids)
    {
        $prestamo = Prestamos::find($ids);
        $prestamo->delete();
    }

    public static function allPrestamos(){
        return Prestamos::all();
    }

    public static function findPrestamoID($id){
        return Prestamos::find($id);
    }

    public function libro(){
        return $this->belongsTo(Libros::class , 'book_id' , 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    } 

}
