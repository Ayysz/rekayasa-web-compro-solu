<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(3)->create([
            'category_id' => 1,
        ]);
        Product::factory(6)->create([
            'category_id' => 2,
        ]);
    }
}
