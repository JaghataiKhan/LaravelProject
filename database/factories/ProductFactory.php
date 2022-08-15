<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(4),
            'usage_description' => $this->faker->paragraph(3),
            'cost' =>$this->faker->numerify('#####'),
            'slug' =>$this->faker->slug(),
            'product_category_id' => $this->faker->numberBetween(1,5),
            'image_path' => 'img/portfolio/Хелат_001.png',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
