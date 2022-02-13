<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    public function definition()
    {
        return [
            'post_id' => Post::all('id')->random(),
            'user_id' => User::all('id')->random(),
            'content' => $this->faker->unique()->text(),
        ];
    }
}
