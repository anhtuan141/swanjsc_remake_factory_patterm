<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'name' => $this->faker->word,
            'alias' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'summary' => $this->faker->sentence,
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
