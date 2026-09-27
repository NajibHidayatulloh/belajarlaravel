<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
Book::create([
               'id' => 1,
               'title' => 'Pemrograman PHP',
               'author' => 'Andi',
               'year' => 2024,
               'stock' => 7,
               ]);
 Book::create([
    
                'id' => 2,
                'title' => 'Pemrograman C++',
                'author' => 'Widodo',
                'year' => 2022,
                'stock' => 6,
            ]);
Book::create([
                'id' => 3,
                'title' => 'Laravel untuk Pemula',
                'author' => 'Maikel',
                'year' => 2023,
                'stock' => 8,
            ]);
Book::create([
                'id' => 4,
                'title' => 'Basis Data',
                'author' => 'Alex',
                'year' => 2021,
                'stock' => 5
            ]);
Book::create([
               'id' => 5,
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Pworabo',
                'year' => 2022,
                'stock' => 9
            ]);

Book::create([
                'id' => 6,
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Joko',
                'year' => 2024,
                'stock' => 7
            ]);
    }
}
