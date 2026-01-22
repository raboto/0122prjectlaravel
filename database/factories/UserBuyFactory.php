<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserBuy>
 */
class UserBuyFactory extends Factory
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
            'user_id' => \App\Models\User::factory(),
            'dish_id' => \App\Models\Dish::factory(),
            'quantity' => $this->fake()->numberBetween(1, 5),
            'total_price' => $this->fake()->randomFloat(2, 1, 100000)
        ];
    }
}
