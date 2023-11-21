<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->text(10);
        $price = $this->faker->numberBetween(100, 900);


        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(50),
            'image_name' => $this->faker->imageUrl(50, 50),
            'price' => $price,
            'sale_price' => $price - 50,

        ];
    }
}
