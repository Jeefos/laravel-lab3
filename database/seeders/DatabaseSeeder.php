<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Author::factory()
            ->count(5)
            ->hasPosts(3, function (array $attributes, Author $author) {
                return ['author_id' => $author->id];
            })
            ->create();
    }
}
