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
            'ISBN'=>'00000000',
            'stock'=>'10'
        ]);
        Libros::create([
            'Nombre'=>'La Divina Comedia',
            'Autor'=>'Dante Aligneri',
            'Imagen'=>'',
            'ISBN'=>'0000000022',
            'stock'=>'12'
        ]);
    }
}
