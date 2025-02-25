<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::firstOrcreate(['name' => 'Nike']);
        Brand::firstOrcreate(['name' => 'Adidas']);
        Brand::firstOrcreate(['name' => 'Puma']);
        Brand::firstOrcreate(['name' => 'Reebok']);
        Brand::firstOrcreate(['name' => 'New Balance']);
        Brand::firstOrcreate(['name' => 'Fila']);
        Brand::firstOrcreate(['name' => 'Alo']);
    }
}
