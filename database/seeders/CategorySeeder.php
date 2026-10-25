<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;    

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Pemrograman', 'Framework', 'Database', 'Ilmu Komputer', 'Data Science', 'Novel'];
        foreach ($names as $name) {
            Category::create(['name' => $name]);
        }
    }
}
