<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barber_id' => User::where('is_barber', true)->inRandomOrder()->first()->id,
            'client_id' => User::where('is_barber', false)->inRandomOrder()->first()->id,
            'datetime' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'completed', 'cancelled']),
            'code' => Str::random(8),
            'description' => $this->faker->sentence,
        ];
    }
}
