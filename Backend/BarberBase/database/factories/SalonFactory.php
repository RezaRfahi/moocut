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
        $breakDays = $this->faker->randomElements(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], $this->faker->numberBetween(1, 7));

        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,
            'postcode' => $this->faker->postcode,
            'establish' => $this->faker->date(),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'start' => $this->faker->time('H:i:s', '08:00:00'),
            'finish' => $this->faker->time('H:i:s', '23:00:00'),
            'map' => $this->faker->latitude().','.$this->faker->longitude(),
            'break_days' => implode(',', $breakDays),
        ];
    }
}
