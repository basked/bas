<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class PivotStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'current_status_id' => $this->faker->randomNumber([Status::all('id')->toArray()]),
            'next_status_id' => $this->faker->randomNumber([Status::all('id')->toArray()]),
            'access' => true
        ];
    }
}
