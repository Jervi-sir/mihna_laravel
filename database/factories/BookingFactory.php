<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, // you may want to set this depending on your needs
            'training_id' => 1, // you may want to set this depending on your needs
            'status' => $this->faker->randomElement(['confirmed', 'pending']),
        ];
    }
}
