<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'commenter_name' => $this->faker->name(),
            'comment' => $this->faker->sentence(10),
        ];
    }
}
