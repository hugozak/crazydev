<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(8, true),
            'time' => $this->faker->numberBetween(60, 120)
        ];
    }
}
