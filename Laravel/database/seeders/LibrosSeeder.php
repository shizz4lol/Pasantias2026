<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'Nombre'=>'Rayuela',
            'Autor'=>'Julio Cortazar',
            'Imagen'=>'../images/rayuela.jpg',
            'ISBN'=>'978-842-0437-484'
        ]);
        Libro::create([
            'Nombre'=>'La Divina Comedia',
            'Autor'=>'Dante Aligneri',
            'Imagen'=>'../images/divinacomedia.jpg',
            'ISBN'=>'978-956-0011-275'
        ]);
        Libro::create([
            'Nombre'=>'Padre rico, Padre pobre',
            'Autor'=>'Robert Kiyosaki',
            'Imagen'=>'../images/padrericopadrepobre.jpg',
            'ISBN'=>'978-607-31-1161-8'
        ]);
        Libro::create([
            'Nombre'=>'Harry Potter y la Piedra Filosofal',
            'Autor'=>'J. K. Rowling',
            'Imagen'=>'../images/harrypotterpiedrafilosofal.jpg',
            'ISBN'=>'978-987-8000-107'
        ]);
        Libro::create([
            'Nombre'=>'El Retrato de Dorian Gray',
            'Autor'=>'Oscar Wilde',
            'Imagen'=>'../images/retratodoriangray.jpg',
            'ISBN'=>'978-987-2121-389'
        ]);
    }
}
