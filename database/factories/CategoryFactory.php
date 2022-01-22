<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $title = $this->faker->text(20);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->words,
            'parent_id' =>$this->faker->randomDigit(5),
        ];
    }
}
