<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->creditCardNumber(),
            'expiry_date' => fake()->dateTimeBetween(now(), '+6 years'),
            'security_code' => fake()->numerify(),
            'is_saved' => fake()->boolean(),
        ];
    }
}
