<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->fake()->word(),
            'description' => $this->fake()->sentence(),
            'price' => $this->fake()->randomFloat(2, 1, 10000),
            'allergens' => $this->fake()->randomElement(['nuts', 'honey', 'gluten', 'fish', 'lactose', 'none']),
        ];
    }
}
