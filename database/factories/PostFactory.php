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
    use Illuminate\Support\Str;

    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
            'summary' => Str::limit($this->faker->text(200), 50),
            'slug' => Str::snake($title),
            'reading_time' => $this->faker->numberBetween(1, 5), //
            'status' => $this->faker->randomElement(['published', 'draft', 'archived', 'pending']),
        ];
    }

}
