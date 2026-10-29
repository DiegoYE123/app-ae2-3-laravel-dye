<?php
 
namespace Database\Seeders;
 
use App\Models\LibroDYE;
use Illuminate\Database\Seeder;
 
class LibroSeeder extends Seeder
{
    public function run(): void
    {
        LibroDYE::create([
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'anio_publicacion' => 1605,
        ]);
 
        LibroDYE::create([
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'anio_publicacion' => 1967,
        ]);
 
        LibroDYE::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'anio_publicacion' => 1949,
        ]);
    }
}

