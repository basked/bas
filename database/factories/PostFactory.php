<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => 'title',
            'slug' => 'slug',
            'body' => 'body',
            'user_id'=>1,
            'status'=>1,
        ];
    }
}
