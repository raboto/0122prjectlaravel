<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
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
            'table_id' => \App\Models\Table::factory(),
            'customer_name' => $this->faker->name(),
            'customer_contact' => $this->faker->phoneNumber(),
            'reservation_time' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'number_of_guests' => $this->faker->numberBetween(1, 12)
        ];
    }
}
