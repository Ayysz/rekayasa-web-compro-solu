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
        $now = now();
        Category::insert([
            [
                'name' => 'Service',
                'description' => 'Service category',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Product',
                'description' => 'Product category',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Blog',
                'description' => 'Blog category Article',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Success Story',
                'description' => 'Success Story category Article',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
