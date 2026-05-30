<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libros;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libros::create([
            'Nombre'=>'Rayuela',
            'Autor'=>'Julio Cortazar',
            'Imagen'=>'',
            'ISBN'=>'978-842-0437-484'
        ]);
        Libros::create([
            'Nombre'=>'La Divina Comedia',
            'Autor'=>'Dante Aligneri',
            'Imagen'=>'',
            'ISBN'=>'978-956-0011-275'
        ]);
        Libros::create([
            'Nombre'=>'Padre rico, Padre pobre',
            'Autor'=>'Robert Kiyosaki',
            'Imagen'=>'',
            'ISBN'=>'978-607-31-1161-8'
        ]);
        Libros::create([
            'Nombre'=>'Harry Potter y la Piedra Filosofal',
            'Autor'=>'J. K. Rowling',
            'Imagen'=>'',
            'ISBN'=>'978-987-8000-107'
        ]);
        Libros::create([
            'Nombre'=>'El Retrato de Dorian Gray',
            'Autor'=>'Oscar Wilde',
            'Imagen'=>'',
            'ISBN'=>'978-987-2121-389'
        ]);
    }
}
