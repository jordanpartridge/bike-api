<?php

namespace Database\Factories;

use App\Models\Ride;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ride>
 */
class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'external_id' => fake()->unique()->regexify('[A-Z0-9]{10}'),
            'recorded_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
