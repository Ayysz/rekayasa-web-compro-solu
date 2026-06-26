<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(3),
            'content' => $this->faker->paragraph(3),
            'tag' => $this->faker->sentence(1),
            'category_id' => $this->faker->numberBetween(3,4),
        ];
    }
}
