<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
            'title' => fake()->sentence(),
            'text' => fake()->paragraph(6, true),
            'image' => "https://lh3.googleusercontent.com/ci/AEwo86eQgJ7dV1zpJkmXFqQzAqDSOsTWtYWEgIyVLZ4ILoMqXZZ-ve4-2fWX8_cQ8OzwTHknIqAKkA",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}