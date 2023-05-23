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
    public function definition(): array
    {
        return [
            'title' => fake()->text(),
            'image' => 'https://w7.pngwing.com/pngs/513/846/png-transparent-backpack-bag-timbuk2-hand-luggage-travel-black-bag-png-material-luggage-bags-black-hair.png',
            'description' => fake()->realText(2000),
            'price' => fake()->randomFloat(2, 20, 100),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}