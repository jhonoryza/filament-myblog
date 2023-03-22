<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->factoryForModel(Category::class),
            'title' => $this->faker->text(10),
            'desc' => $this->faker->text(20),
            'body' => $this->faker->paragraph(),
            'published_at' => now()->addDays(random_int(1,3))
        ];
    }
}
