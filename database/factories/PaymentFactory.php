<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => 1, // you may want to set this depending on your needs
            'amount' => $this->faker->randomFloat(2, 10, 200), // you may want to set this depending on your needs
            'status' => $this->faker->randomElement(['full', 'half']),
        ];
    }
}
