<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        return [
            'code' => fake()->uuid,
            'category_id' => rand(2, 5),
            'name' => $name,
            'slug' => str_slug($name),
            'description' => fake()->paragraph(),
             'quantity' => rand(0, 100),
            'price' => rand(100, 500),
        ];
    }
}
