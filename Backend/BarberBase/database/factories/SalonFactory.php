<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salon>
 */
class SalonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breakDays = fake()->randomElements(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], fake()->numberBetween(1, 7));

        return [
            'name' => fake()->company,
            'address' => fake()->address,
            'tel' => fake()->phoneNumber,
            'postcode' => fake()->postcode,
            'establish' => fake()->date(),
            'status' => fake()->randomElement(['open', 'closed']),
            'start' => fake()->time('H:i:s', '08:00:00'),
            'finish' => fake()->time('H:i:s', '23:00:00'),
            'map' => fake()->latitude().','.fake()->longitude(),
            'break_days' => implode(',', $breakDays),
        ];
    }
}
