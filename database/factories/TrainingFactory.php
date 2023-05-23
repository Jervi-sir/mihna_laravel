<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coach_id' => 1, // you may want to set this depending on your needs
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'min_seats' => $this->faker->numberBetween(1, 20),
        ];
    }
}
