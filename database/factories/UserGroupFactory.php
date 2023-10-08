<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'alias' => $this->faker->slug,
            'summary' => $this->faker->sentence,
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
