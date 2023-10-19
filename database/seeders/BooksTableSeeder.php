<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title'  => '¿Y si lo probamos...?',
            'author' => 'Megan Maxwell'
        ]);

        Book::create([
            'title'  => 'El libro negro de las horas',
            'author' => 'Eva García Sáenz'
        ]);
    }
}
