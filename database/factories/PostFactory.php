<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{

    public function definition(): array
    {
        $title=$this->faker->unique()->jobTitle;
        return [
            'title' => $title,
            'category_id' =>Category::all('id')->random(),
            'slug' => Str::slug($title),
            'content' =>  $this->faker->unique()->text ,
            'user_id'=>User::all('id')->random(),
            'status'=>1,
        ];
    }
}
