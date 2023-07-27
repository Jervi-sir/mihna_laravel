<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Wilaya;
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
        $start_date = $this->faker->dateTimeBetween('-1 month', '+1 month');
        return [
            'category_id' => Category::inRandomOrder()->first()->id, // you may want to set this depending on your needs
            'coach_id' => 1, // you may want to set this depending on your needs
            'wilaya_id' => Wilaya::inRandomOrder()->first()->id,
            'address' => $this->faker->address,
            'title' => $this->faker->sentence,
            'short_description' => $this->faker->sentence(15), // short description of 15 words
            'long_description' => $this->faker->paragraphs(3, true), // long description of 3 paragraphs
            'min_seats' => $this->faker->numberBetween(1, 20),
            'images' => 'https://placehold.co/600x400',
            'start_date' => $start_date,
            'end_date' => $this->faker->dateTimeBetween($start_date, $start_date->format('Y-m-d H:i:s').' +2 months'),
            'price' => $this->faker->randomFloat(2, 10, 1000), // 10.00 - 1000.00

        ];
    }
}
