<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beds' => fake()->numberBetween(1, 7),
            'baths' => fake()->numberBetween(1, 3),
            'area' => fake()->numberBetween(10, 200),
            'beds' => fake()->numberBetween(1, 7),
            'city' => fake()->city(),
            'code' => fake()->postcode(),
            'street_name' => fake()->streetName(),
            'street_number' => fake()->numberBetween(1, 70),
            'price' => fake()->numberBetween(20000, 1000000),
        ];
    }
}
