<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Novan Bahtiar',
            'year' => 2022,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Abdul Kadir',
            'year' => 2018,
            'stock' => 3,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Bambang Hariyanto',
            'year' => 2019,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Rosa A.S.',
            'year' => 2021,
            'stock' => 2,
        ]);
    }
}