<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
            'slug' => $this->faker->slug(),
            'summary' => $this->faker->paragraph(),
            'reading_time' => $this->faker->numberBetween(0, 5),
            'status' => $this->faker->randomElement(['published', 'draft','archived','pending']),

            ];

    }
}
