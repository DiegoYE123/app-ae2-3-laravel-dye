<?php
 
namespace App\Http\Controllers;
 
use App\Models\LibroDYE;
 
class LibroDYEController extends Controller
{
    public function index()
    {
        // El modelo recupera los libros de la base de datos
        $libros = LibroDYE::all();
 
        // Se envían a la vista
        return view('libros', compact('libros'));
    }
}
