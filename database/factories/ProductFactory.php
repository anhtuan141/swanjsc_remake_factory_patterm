<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_vi' => $this->faker->word,
            'name_en' => $this->faker->word,
            'alias' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'image_2' => $this->faker->imageUrl(),
            'image_3' => $this->faker->imageUrl(),
            'supplier_id' => function() {
                return \App\Models\Supplier::factory()->create()->id;
            },
            'category_id' => function() {
                return \App\Models\Category::factory()->create()->id;
            },
            'farming_area' => $this->faker->word,
            'product_size' => $this->faker->word,
            'packing_standard' => $this->faker->word,
            'summary' => $this->faker->sentence,
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
