<?php

namespace Database\Factories;

use App\Models\Ride;
use App\Models\RideStat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RideStat>
 */
class RideStatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ride_id' => Ride::first() ?? Ride::factory(),
            'key' => $this->faker->word(),
            'value' => $this->faker->randomNumber(),
            'type' => $this->faker->randomElement(['distance', 'speed', 'duration']),
        ];
    }
}
