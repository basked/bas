<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    public function definition()
    {
        return [
            'post_id' => $this->faker->buildingNumber(),
            'user_id' => $this->faker->buildingNumber(),
            'published_by' => $this->faker->buildingNumber(),
            'content' => $this->faker->word(),
        ];
    }
}
