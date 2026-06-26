<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'link_reference' => $this->faker->url(),
            'category_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
