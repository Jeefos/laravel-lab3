<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(4),
        ];
    }
}
