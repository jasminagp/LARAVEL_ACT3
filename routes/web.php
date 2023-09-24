<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Libros
Route::get('/modificarLibro', [LibrosController::class,'updateLibro']);
Route::get('/deleteLibro', [LibrosController::class,'deleteLibro']);
Route::get('/formAddLibro', [LibrosController::class,'showFormularioAñadirLibro']);

Route::post('/addLibro', [LibrosController::class,'addLibroFormulario'])->name('addLibro') ;
Route::get('/showLibros', [LibrosController::class, 'showAllLibros'])->name('showLibros');

Route::get('/deleteLibro/{id}' , [LibrosController::class, 'deleteLibro'])->name('deleteLibro');

Route::get('/updateLibroForm/{id}' , [LibrosController::class, 'updateLibroForm'])->name('updateLibroForm');
Route::post('/updateLibro' , [LibrosController::class, 'updateLibro'])->name('updateLibro');

//Prestamos
Route::get('/modificarPrestamo', [PrestamosController::class,'updatePrestamo']);
Route::get('/deletePrestamo', [PrestamosController::class,'deletePrestamo']);
Route::get('/formAddPrestamo', [PrestamosController::class,'showFormularioAñadirPrestamo']);

Route::post('/addPrestamo', [PrestamosController::class,'addPrestamoFormulario'])->name('addPrestamo') ;
Route::get('/showPrestamos', [PrestamosController::class, 'showAllPrestamos'])->name('showPrestamos');

Route::get('/deletePrestamo/{id}' , [PrestamosController::class, 'deletePrestamo'])->name('deletePrestamo');

Route::get('/updatePrestamoForm/{id}' , [PrestamosController::class, 'updatePrestamoForm'])->name('updatePrestamoForm');
Route::post('/updatePrestamo' , [PrestamosController::class, 'updatePrestamo'])->name('updatePrestamo');

//Buscador de libros
Route::post('/showAllLibrosTitulo', [LibrosController::class, 'showAllLibrosTitulo'])->name('showAllLibrosTitulo');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
