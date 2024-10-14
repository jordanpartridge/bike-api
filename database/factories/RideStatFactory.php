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
            'value' => function (array $attributes) {
                return match ($attributes['type']) {
                    'distance' => $this->faker->randomFloat(2, 0, 100),
                    'speed' => $this->faker->randomFloat(1, 0, 30),
                    'duration' => $this->faker->numberBetween(60, 3600),
                };
            },
            'type' => $this->faker->randomElement(['distance', 'speed', 'duration']),
        ];
    }
}
