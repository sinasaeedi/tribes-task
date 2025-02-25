<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrcreate(['name' => 'Shoes']);
        Category::firstOrcreate(['name' => 'Clothes']);
        Category::firstOrcreate(['name' => 'Accessories']);
        Category::firstOrcreate(['name' => 'Sportswear']);
        Category::firstOrcreate(['name' => 'Gym Bags']);
    }
}
