<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{

    public function definition()
    {
        $title = $this->faker->title;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
        ];
    }
}
